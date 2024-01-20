<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    public function update(Request $request)
    {
        $rules = [
            'about_title' => 'required|string|max:200',
            'about_description' => 'required|string',
            'content_motto' => 'required|string|max:200',
            'content_title' => 'required|string|max:200',
            'description' => 'required|string',
            'vission' => 'required|string|max:200',
            'mission' => 'required|string|max:200',
            'year' => 'required|integer',
            'completed_case' => 'required|integer',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()], 422);
        }
        $content = About::firstOrCreate([]);
        $content->update($validator->validated());
        return response()->json(['status' => 'success', 'message' => 'Content updated successfully']);
    }

    public function uploadImage(Request $request)
    {
        $this->validate($request, [
            'cover_image' => 'image|mimes:jpeg,png,jpg',
            'image1' => 'image|mimes:jpeg,png,jpg',
            'image2' => 'image|mimes:jpeg,png,jpg',
        ]);

        $about = About::first();
        if($request->hasFile('cover_image')) {
            $image = Image::make($request->file('cover_image'));
            $image->resize(780, 780, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $imageName = time().'_cover_image_'.$request->cover_image->extension();
            if(File::exists(public_path().'/assets/images/'.$about->cover_image)) File::delete(public_path().'/assets/images/'.$about->cover_image);
            $image->save(public_path().'/assets/images/'.$imageName);
            $about->cover_image = $imageName;
            $about->save();
            return response()->json(['status' => 'success', 'message' => 'Data berhasil disimpan', 200]);
        }
        if($request->hasFile('image1')) {
            $image = Image::make($request->file('image1'));
            $image->resize(780, 780, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $imageName = time().'_image1_'.$request->image1->extension();
            if(File::exists(public_path().'/assets/images/'.$about->image1)) File::delete(public_path().'/assets/images/'.$about->image1);
            $image->save(public_path().'/assets/images/'.$imageName);
            $about->image1 = $imageName;
            $about->save();
            return response()->json(['status' => 'success', 'message' => 'Data berhasil disimpan', 200]);
        }
        if($request->hasFile('image2')) {
            $image = Image::make($request->file('image2'));
            $image->resize(780, 780, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $imageName = time().'_image2_'.$request->image2->extension();
            if(File::exists(public_path().'/assets/images/'.$about->image2)) File::delete(public_path().'/assets/images/'.$about->image2);
            $image->save(public_path().'/assets/images/'.$imageName);
            $about->image2 = $imageName;
            $about->save();
            return response()->json(['status' => 'success', 'message' => 'Data berhasil disimpan', 200]);
        }
    }
}
