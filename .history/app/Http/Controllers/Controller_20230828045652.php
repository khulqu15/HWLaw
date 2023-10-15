<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function home()
    {
        $post = Post::all();
        return response()->json($post);
    }
}
