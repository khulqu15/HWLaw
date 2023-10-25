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
}
