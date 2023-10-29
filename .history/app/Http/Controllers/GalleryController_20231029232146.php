<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 10;
        $galleries = Gallery::simplePaginate($perPage);
        $count_galleries = Gallery::count();

        return view('private.gallery.index')
            ->with('galleries', $galleries)
            ->with('count_galleries', $count_galleries);
    }

    public function create(Request $request)
    {
        return view('private.gallery.form');
    }

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required|string|max:50',
                'image' => 'required|image|mimes:jpg,png,jpeg',
                'description' => 'required'
            ]);

            $gallery = new Gallery();
            $gallery->name = $request->name;
            $gallery->description = $request->description;
            $image = Image::make($request->file('image'));
            $image->resize(780, 780, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $imageName = time().'_'.Str::slug($request->name).'.'.$request->image->extension();
            $image->save(public_path().'/assets/images/'.$imageName);
            $gallery->image = $imageName;
            $gallery->save();
            return response()->json(['status' => 'success', 'message' => 'Data berhasil disimpan', 200]);
        } catch (ValidationException $e) {
            return response()->json(['status' => 'error', 'messae' => $e->validator->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'An error occurred: ' . $e->getMessage()], 500);
        }
    }

    public function edit(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        return view('private.gallery.form')
            ->with('gallery', $gallery);
    }

    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'title' => 'required|string|max:50',
                'description' => 'required'
            ]);

            $gallery = Gallery::find($id);
            $gallery->name = $request->name;
            $gallery->description = $request->description;
            if($request->hasFile('image')) {
                $image = Image::make($request->file('image'));
                $image->resize(780, 780, function($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $imageName = time().'_'.Str::slug($request->title).'.'.$request->image->extension();
                $image->save(public_path().'/assets/images/'.$imageName);
                if(File::exists(public_path().'/assets/images/'.$gallery->image)) File::delete(public_path().'/assets/images/'.$gallery->image);
                $gallery->image = $imageName;
            }
            $gallery->save();
            return response()->json(['status' => 'success', 'message' => 'Data berhasil disimpan', 200]);
        } catch (ValidationException $e) {
            return response()->json(['status' => 'error', 'messae' => $e->validator->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'An error occurred: ' . $e->getMessage()], 500);
        }
    }

    public function destroy(Request $request, $id)
    {
        try {
            $gallery = Gallery::find($id);
            if(File::exists(public_path().'/assets/images/'.$gallery->image)) File::delete(public_path().'/assets/images/'.$gallery->image);
            $gallery->delete();
            return redirect('/private/galleries');
        } catch(Exception $err) {
            return redirect('/private/galleries');
        }
    }

}
