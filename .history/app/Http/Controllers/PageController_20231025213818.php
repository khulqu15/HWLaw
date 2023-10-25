<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\CategoryPost;
use App\Models\Post;
use App\Models\Practice;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller {
    public function home(Request $request)
    {
        $post = Post::orderBy('created_at', 'DESC')->get();
        $about = About::first();
        $practices = Practice::all();
        foreach($practices as $practice) {
            $practice->slug = Str::slug($practice->title);
        }
        $category = CategoryPost::all();
        return view('public.home', [
            'post' => $post,
            'about' => $about,
            'categories' => $category,
            'practices' => $practices,
        ]);
    }

    public function about(Request $request, $slug) {
        $category = CategoryPost::all();
        $practices = Practice::all();
        $title = str_replace('-', ' ', $slug);
        $practice = Practice::where('title', $title)->first();
        foreach($practices as $practice) {
            $practice->slug = Str::slug($practice->title);
        }
        $about = About::first();
        return view('public.about')
            ->with('about', $about)
            ->with('practices', $practices)
            ->with('practice', $practice)
            ->with('categories', $category);
    }

    public function practice(Request $request) {
        $category = CategoryPost::all();
        $practices = Practice::all();
        foreach($practices as $practice) {
            $practice->slug = Str::slug($practice->title);
        }
        return view('public.practice')
            ->with('practices', $practices)
            ->with('categories', $category);
    }

    public function contact(Request $request) {
        $category = CategoryPost::all();
        $practices = Practice::all();
        foreach($practices as $practice) {
            $practice->slug = Str::slug($practice->title);
        }
        return view('public.contact')
            ->with('practices', $practices)
            ->with('categories', $category);
    }

    public function news(Request $request) {
        $perPage = 10;
        $categories = CategoryPost::get();
        $count_news = Post::count();
        $news = Post::query();
        $practices = Practice::all();
        foreach($practices as $practice) {
            $practice->slug = Str::slug($practice->title);
        }
        if($request->get('title'))
            $news->where('title', 'LIKE', "%".$request->get('title')."%");

        if($request->get('category'))
            $news->whereHas('category', function($query) use($request) {
                $query->where('name', $request->get('category'));
            });

        if($request->get('sort'))
            $news->orderBy('updated_at', $request->get('sort'));

        $news = $news->with('category')->simplePaginate($perPage)->appends([
            'title' => $request->get('title'),
            'category' => $request->get('category'),
            'sort' => $request->get('sort')
        ]);

        foreach($news as $item) {
            $slug = Str::slug($item->title);
            $item->slug = $slug;
        }

        return view('public.news')
            ->with('categories', $categories)
            ->with('practices', $practices)
            ->with('count_news', $count_news)
            ->with('news', $news);
    }

    public function showNews(Request $request, $slug) {
        $category = CategoryPost::all();
        $practices = Practice::all();
        foreach($practices as $practice) {
            $practice->slug = Str::slug($practice->title);
        }
        $title = str_replace('-', ' ', $slug);
        $post = Post::where('title', $title)->first();
        return view('public.news-detail')
            ->with('practices', $practices)
            ->with('news', $post)
            ->with('categories', $category);
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
