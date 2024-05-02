<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    //
    public function index()
    {
        // ultimos 3 post
        $posts = Post::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->take(3)->get();
        return view('welcome', compact('posts'));
    }
}
