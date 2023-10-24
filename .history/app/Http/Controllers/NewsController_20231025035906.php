<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class NewsController extends Controller {
    public function index(Request $request)
    {
        $perPage = 10;
        $categories = CategoryPost::get();
        $count_news = Post::count();
        $news = Post::query();

        if($request->get('title'))
            $news->where('title', 'LIKE', "%".$request->get('title')."%");

        if($request->get('category'))
            $news->where('title', 'LIKE', $request->get('category'));

        if($request->get('sort'))
            $news->orderBy('updated_at', $request->get('sort'));

        $news = $news->with('category')->simplePaginate($perPage)->appends([
            'title' => $request->get('title'),
            'category' => $request->get('category'),
            'sort' => $request->get('sort')
        ]);;
        return view('private.update.index')
            ->with('categories', $categories)
            ->with('news', $news)
            ->with('count_news', $count_news);
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
            $news->text = $request->text;
            $news->category_post_id = $request->category_post_id;
            $image = Image::make($request->file('cover'));
            $image->resize(780, 780, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $imageName = time().'_'.Str::slug($request->title).'.'.$request->cover->extension();
            $image->save(public_path().'/assets/images/'.$imageName);
            $news->cover = $imageName;
            $news->save();
            return response()->json(['status' => 'success', 'message' => 'Data berhasil disimpan', 200]);
        } catch (ValidationException $e) {
            return response()->json(['status' => 'error', 'messae' => $e->validator->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'An error occurred: ' . $e->getMessage()], 500);
        }
    }

    public function edit(Request $request, $id)
    {
        $news = Post::find($id);
        $categories = CategoryPost::get();
        return view('private.update.form')
            ->with('categories', $categories)
            ->with('news', $news);
    }

    public function update(Request $request, $id)
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

            $news = Post::find($id);
            $news->title = $request->title;
            $news->location = $request->location;
            $news->date = $request->date;
            $news->cover = $request->cover;
            $news->text = $request->text;
            $news->category_post_id = $request->category_post_id;
            $image = Image::make($request->file('cover'));
            $image->resize(780, 780, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $imageName = time().'_'.Str::slug($request->title).'.'.$request->cover->extension();
            $image->save(public_path().'/assets/images/'.$imageName);
            $news->cover = $imageName;
            $news->save();
            return response()->json(['status' => 'success', 'message' => 'Data berhasil disimpan', 200]);
        } catch (ValidationException $e) {
            return response()->json(['status' => 'error', 'messae' => $e->validator->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'An error occurred: ' . $e->getMessage()], 500);
        }
    }

    public function destroy(Request $request, $id)
    {
        try {
            $news = Post::find($id);
            if(File::exists(public_path().'/assets/images/'.$news->cover)) File::delete(public_path().'/assets/images/'.$news->cover);
            $news->delete();
            return redirect('/private/news');
        } catch(Exception $err) {
            return redirect('/private/news');
        }
    }
}
