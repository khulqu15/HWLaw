<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use Illuminate\Http\Request;

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
        $categories = Practice::get();
        return view('private.practice.form')->with('categories', $categories);
    }
}
