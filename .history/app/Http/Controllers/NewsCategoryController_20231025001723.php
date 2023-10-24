<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = CategoryPost::with('posts')->get();
        // var_dump($categories);
        // exit;
        return view('private.update.category.index')->with('categories', $categories);
    }

    public function create(Request $request)
    {
        return view('private.update.category.form');
    }
}
