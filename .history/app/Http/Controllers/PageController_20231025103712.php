<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\CategoryPost;
use App\Models\Post;
use Illuminate\Support\Facades\Request;
use Illuminate\View\View;

class PageController extends Controller {
    public function home(Request $request)
    {
        $post = Post::orderBy('created_at', 'DESC')->get();
        $about = About::first();
        $category = CategoryPost::all();
        return view('public.home', [
            'post' => $post,
            'about' => $about,
            'categories' => $category,
        ]);
    }

    public function about(Request $request) {
        $category = CategoryPost::all();
        $about = About::first();
        return view('public.about')
            ->with('about', $about)
            ->with('categories', $category);
    }

    public function practice(Request $request) {
        $category = CategoryPost::all();
        return view('public.practice');
    }

    public function contact(Request $request) {
        $category = CategoryPost::all();
        return view('public.contact');
    }

    public function news(Request $request) {
        $category = CategoryPost::all();
        return view('public.news');
    }

    public function login(Request $request) {
        $category = CategoryPost::all();
        return view('public.login');
    }

    public function dashboard(Request $request) {
        $about = About::first();
        return view('private.dashboard')->with('about', $about);
    }
}
