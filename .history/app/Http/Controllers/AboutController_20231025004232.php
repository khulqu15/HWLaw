<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
            return response()->json(['status' => 'success', 'message' => 'Data berhasil disimpan', 200]);
        } catch (ValidationException $e) {
            return response()->json(['status' => 'error', 'messae' => $e->validator->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'An error occurred: ' . $e->getMessage()], 500);
        }
    }

    public function uploadImage(Request $request)
    {
        // try {
            $this->validate($request, [
                'image1' => 'image|mimes:jpeg,png,jpg',
                'image2' => 'image|mimes:jpeg,png,jpg',
            ]);

            $about = About::first();
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
        // catch (ValidationException $e) {
        //     return response()->json(['status' => 'error', 'messae' => $e->validator->errors()], 422);
        // } catch (\Exception $e) {
        //     return response()->json(['status' => 'error', 'message' => 'An error occurred: ' . $e->getMessage()], 500);
        // }
    }
// }
