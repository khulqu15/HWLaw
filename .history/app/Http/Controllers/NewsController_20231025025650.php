<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewsController extends Controller {
    public function index(Request $request)
    {
        $categories = CategoryPost::get();
        return view('private.update.index')->with('categories', $categories);
    }

    public function create(Request $request)
    {
        $categories = CategoryPost::get();
        return view('private.update.form')->with('categories', $categories);
    }
}
