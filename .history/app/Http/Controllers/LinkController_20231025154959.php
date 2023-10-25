<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index(Request $request)
    {
        $count_links = Link::count();
        $links = Link::all();
        return view('private.link.index')
            ->('count_links', $count_links)
            ->('links', $links);

    }
}
