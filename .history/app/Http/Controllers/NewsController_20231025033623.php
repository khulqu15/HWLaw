<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Intervention\Image\Facades\Image;

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

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'title' => 'required|string|max:50',
                'location' => 'required|string|max:150',
                'date' => 'required|date|date_format:Y-m-d',
                'category_post_id' => 'required',
                'cover' => 'required|image|mimes:jpg,png,jpeg',
                'text' => 'required'
            ]);

            $news = new Post();
            $news->title = $request->title;
            $news->location = $request->location;
            $news->date = $request->date;
            $news->cover = $request->cover;
            $image = Image::make($request->file('cover'));
            $image->resize(780, 780, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $imageName = time().'_news_'.
        }
    }
}
