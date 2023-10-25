<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\CategoryPost;
use App\Models\Link;
use App\Models\Post;
use App\Models\Practice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PageController extends Controller {
    public function home(Request $request)
    {
        $post = Post::with('category')->orderBy('created_at', 'DESC')->limit(4)->get();
        $article = Post::with('category')->orderBy('created_at', 'DESC')->limit(6)->get();
        $about = About::first();
        $practices = Practice::all();
        $youtube_media = Link::where('name', 'youtube')->where('category', 'media')->get();
        foreach($practices as $practice) {
            $practice->slug = Str::slug($practice->title);
        }
        $category = CategoryPost::all();
        $contact = Link::where('category', 'kontak')->get();
        return view('public.home', [
            'post' => $post,
            'article' => $article,
            'about' => $about,
            'categories' => $category,
            'practices' => $practices,
            'youtube_media' => $youtube_media,
            'contact' => $contact,
        ]);
    }

    public function about(Request $request) {
        $category = CategoryPost::all();
        $contact = Link::where('category', 'kontak')->get();
        $practices = Practice::all();
        foreach($practices as $practice) {
            $practice->slug = Str::slug($practice->title);
        }
        $about = About::first();
        return view('public.about')
            ->with('about', $about)
            ->with('practices', $practices)
            ->with('contact', $contact)
            ->with('categories', $category);
    }

    public function practice(Request $request, $slug) {
        $category = CategoryPost::all();
        $contact = Link::where('category', 'kontak')->get();
        $practices = Practice::all();
        foreach($practices as $practice) {
            $practice->slug = Str::slug($practice->title);
        }
        $title = str_replace('-', ' ', $slug);
        $practice = Practice::where('title', $title)->first();
        return view('public.practice')
            ->with('practices', $practices)
            ->with('practice', $practice)
            ->with('contact', $contact)
            ->with('categories', $category);
    }

    public function contact(Request $request) {
        $category = CategoryPost::all();
        $contact = Link::where('category', 'kontak')->get();
        $practices = Practice::all();
        foreach($practices as $practice) {
            $practice->slug = Str::slug($practice->title);
        }
        return view('public.contact')
            ->with('practices', $practices)
            ->with('contact', $contact)
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
            ->with('practices', $practices)
            ->with('count_news', $count_news)
            ->with('news', $news)
            ->with('categories', $categories);
    }

    public function showNews(Request $request, $slug) {
        $category = CategoryPost::all();
        $contact = Link::where('category', 'kontak')->get();
        $practices = Practice::all();
        foreach($practices as $practice) {
            $practice->slug = Str::slug($practice->title);
        }
        $title = str_replace('-', ' ', $slug);
        $post = Post::where('title', $title)->first();
        return view('public.news-detail')
            ->with('practices', $practices)
            ->with('news', $post)
            ->with('contact', $contact)
            ->with('categories', $category);
    }

    public function login(Request $request) {
        $category = CategoryPost::all();
        $contact = Link::where('category', 'kontak')->get();
        return view('public.login')
        ->with('contact', $contact)
            ->with('categories', $category);
    }

    public function dashboard(Request $request) {
        $about = About::first();
        return view('private.dashboard')->with('about', $about);
    }

    public function profile(Request $request) {
        $user = User::find(Auth::id());
        return view('private.profile')->with('about', $user);
    }

    public function profile(Request $request) {
        $user = User::find(Auth::id());
        return view('private.profile')->with('about', $user);
    }


}
