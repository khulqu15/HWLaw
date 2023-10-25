<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\CategoryPost;
use App\Models\Post;
use Illuminate\Http\Request;

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
        return view('public.practice')
            ->with('categories', $category);
    }

    public function contact(Request $request) {
        $category = CategoryPost::all();
        return view('public.contact')
            ->with('categories', $category);
    }

    public function news(Request $request) {
        $perPage = 10;
        $categories = CategoryPost::get();
        $count_news = Post::count();
        $news = Post::query();

        if($request->get('title'))
            $news->where('title', 'LIKE', "%".$request->get('title')."%");

        if($request->get('category'))
            $news->where('category_post_id', $request->get('category'));

        if($request->get('sort'))
            $news->orderBy('updated_at', $request->get('sort'));

        $news = $news->with('category')->simplePaginate($perPage)->appends([
            'title' => $request->get('title'),
            'category' => $request->get('category'),
            'sort' => $request->get('sort')
        ]);

        return view('public.news')
            ->with('categories', $categories)
            ->with('count_news', $count_news)
            ->with('news', $news);
    }

    public function login(Request $request) {
        $category = CategoryPost::all();
        return view('public.login')
            ->with('categories', $category);
    }

    public function dashboard(Request $request) {
        $about = About::first();
        return view('private.dashboard')->with('about', $about);
    }
}
