<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use Illuminate\Http\Request;
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
                'location' => 'required|string|max:150',
                'date' => 'required|date|date_format:Y-m-d',
                'category_post_id' => 'required',
                'cover' => 'required|image|mimes:jpg,png,jpeg',
                'text' => 'required'
            ]);

            $news = new Practice();
            $news->title = $request->title;
            $news->text = $request->text;
            $image = Image::make($request->file('cover'));
            $image->resize(780, 780, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $imageName = time().'_'.Str::slug($request->title).'.'.$request->cover->extension();
            $image->save(public_path().'/assets/images/'.$imageName);
            $news->cover = $imageName;
            $news->save();
            return response()->json(['status' => 'success', 'message' => 'Data berhasil disimpan', 200]);
        } catch (ValidationException $e) {
            return response()->json(['status' => 'error', 'messae' => $e->validator->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'An error occurred: ' . $e->getMessage()], 500);
        }
    }
}
