<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsCategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = CategoryPost::with('post')->simplePaginate(10);
        // dd($categories);
        return view('private.update.category.index')->with('categories', $categories);
    }

    public function create(Request $request)
    {
        return view('private.update.category.form');
    }

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required|max:50'
            ]);
            $category = new CategoryPost();
            $category->name = $request->name;
            $category->save();
            return response()->json(['status' => 'success', 'message' => 'Kategori Berhasil Disimpan'], 200);
        } catch(ValidationException $err) {
            return response()->json(['status' => 'error', 'message' => $err->validator->errors()], 422);
        } catch(Exception $err) {
            return response()->json(['status' => 'error', 'message' => $err->getMessage()], 500);
        }
    }
}
