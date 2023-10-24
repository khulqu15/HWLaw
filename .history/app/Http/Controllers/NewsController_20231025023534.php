<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewsController extends Controller {
    public function index(Request $request)
    {
        return new Response(view('private.update.index'));
    }

    public function create(Request $request)
    {
        $categories = CategoryPost::all();
        return view('private.update.form')->with('categories', $categories);
    }
}
