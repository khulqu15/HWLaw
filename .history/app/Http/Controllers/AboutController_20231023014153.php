<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    public function update(Request $request)
    {
        try {
            $this->validate($request, [
                'description' => 'required|string',
                'vission' => 'required|string',
                'mission' => 'required|string',
                'year' => 'required|integer',
                'completed_case' => 'required|integer',
            ]);

            $about = About::first();
            $about->description = $request->input('description');
            $about->vission = $request->input('vission');
            $about->mission = $request->input('mission');
            $about->year = $request->input('year');
            $about->completed_case = $request->input('completed_case');
            $about->save();
            return response()->json(['status' => 'success', 'message' => 'Data berhasil disimpan', 400]);
        } catch (ValidationException $e) {
            return response()->json(['status' => 'error', 'messae' => $e->validator->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'An error occurred: ' . $e->getMessage()], 500);
        }
    }

    public function uploadImage(Request $request)
    {
        $this->validate($request, [
            'image1' => 'nullable|image|mimes:jpeg,png,jpg',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $about = About::first();
        if($request->hasFile('image1')) {
            $image = Image::make($request->file('image1'));
            $image->resize(780, 780, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $imageName = time().'_image1_'.$request->image1->extention()
        }
    }
}
