<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LinkController extends Controller
{
    public function index(Request $request)
    {
        $count_links = Link::count();
        $links = Link::all();
        return view('private.link.index')
            ->with('count_links', $count_links)
            ->with('links', $links);
    }

    public function create(Request $request)
    {
        return view('private.link.form');
    }

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required|max:100',
                'category' => 'required|max:100',
                'link' => 'required',
            ]);
            $link = new Link();
            $link->name = $request->name;
            $link->category = $request->category;
            $link->link = $request->link;
            $link->save();
            return response()->json(['status' => 'success', 'message' => 'Kategori Berhasil Disimpan'], 200);
        } catch(ValidationException $err) {
            return response()->json(['status' => 'error', 'message' => $err->validator->errors()], 422);
        } catch(Exception $err) {
            return response()->json(['status' => 'error', 'message' => $err->getMessage()], 500);
        }
    }

    public function edit(Request $request, $id)
    {
        $link = Link::find($id);
        return view('private.link.form')->with('link', $link);
    }

    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'name' => 'required|max:100',
                'category' => 'required|max:100',
                'link' => 'required',
            ]);
            $link = Link::find($id);
            $link->name = $request->name;
            $link->category = $request->category;
            $link->link = $request->link;
            $link->save();
            return response()->json(['status' => 'success', 'message' => 'Kategori Berhasil Disimpan'], 200);
        } catch(ValidationException $err) {
            return response()->json(['status' => 'error', 'message' => $err->validator->errors()], 422);
        } catch(Exception $err) {
            return response()->json(['status' => 'error', 'message' => $err->getMessage()], 500);
        }
    }

    public function destroy(Request $request, $id) {
        try {
            $category = Link::find($id);
            $category->post()->delete();
            $category->delete();
            return redirect('/private/news/categories');
        } catch(Exception $err) {
            return redirect('/private/news/categories');
        }
    }
}
