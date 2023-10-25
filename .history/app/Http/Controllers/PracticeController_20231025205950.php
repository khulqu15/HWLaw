<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PracticeController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 10;
        $practices = Practice::simplePaginate($perPage);
        $count_practices = Practice::count();

        return view('private.practice.index')
            ->with('practices', $practices)
            ->with('count_practices', $count_practices);
    }

    public function create(Request $request)
    {
        return view('private.practice.form');
    }

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'title' => 'required|string|max:50',
                'cover' => 'required|image|mimes:jpg,png,jpeg',
                'text' => 'required'
            ]);

            $practice = new Practice();
            $practice->title = $request->title;
            $practice->text = $request->text;
            $image = Image::make($request->file('cover'));
            $image->resize(780, 780, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $imageName = time().'_'.Str::slug($request->title).'.'.$request->cover->extension();
            $image->save(public_path().'/assets/images/'.$imageName);
            $practice->cover = $imageName;
            $practice->save();
            return response()->json(['status' => 'success', 'message' => 'Data berhasil disimpan', 200]);
        } catch (ValidationException $e) {
            return response()->json(['status' => 'error', 'messae' => $e->validator->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'An error occurred: ' . $e->getMessage()], 500);
        }
    }

    public function edit(Request $request, $id)
    {
        $practice = Practice::find($id);
        return view('private.update.form')
            ->with('practice', $practice);
    }

    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'title' => 'required|string|max:50',
                'text' => 'required'
            ]);

            $practice = Practice::find($id);
            $practice->title = $request->title;
            $practice->text = $request->text;
            if($request->hasFile('cover')) {
                $image = Image::make($request->file('cover'));
                $image->resize(780, 780, function($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $imageName = time().'_'.Str::slug($request->title).'.'.$request->cover->extension();
                $image->save(public_path().'/assets/images/'.$imageName);
                if(File::exists(public_path().'/assets/images/'.$practice->cover)) File::delete(public_path().'/assets/images/'.$practice->cover);
                $practice->cover = $imageName;
            }
            $practice->save();
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
            $practice = Practice::find($id);
            if(File::exists(public_path().'/assets/images/'.$practice->cover)) File::delete(public_path().'/assets/images/'.$practice->cover);
            $practice->delete();
            return redirect('/private/news');
        } catch(Exception $err) {
            return redirect('/private/news');
        }
    }

}
