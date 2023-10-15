<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Client\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function home(Request $request)
    {
        $post = Post::all();
        return view('home', [
            'post' => $post
        ]);
    }
}
