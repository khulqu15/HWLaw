<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewsController extends Controller {
    public function index(Request $request)
    {
        return new Response(view('private.update.index'));
    }
}
