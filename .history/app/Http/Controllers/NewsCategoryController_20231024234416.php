<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index(Request $request)
    {
        return view('private.update.category.index');
    }

    public function index(Request $request)
    {
        return view('private.update.category.create');
    }
}
