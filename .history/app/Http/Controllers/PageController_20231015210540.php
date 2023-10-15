<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Request;

class PageController extends Controller {
    public function home(Request $request)
    {
        $post = Post::all();
        return view('public.home', [
            'post' => $post
        ]);
    }

    public function about(Request $request) {
        return view('public.about');
    }
}
