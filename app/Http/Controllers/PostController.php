<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('posts.index');
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        if (!$post || $post->status != 'PUBLISHED') {
            // O puedes mostrar un mensaje de error
            return abort(404, 'Post no encontrado.');
        }
        return view('posts.show', compact('post'));
    }
    public function blogRight()
    {
        return view('posts.right');
    }
}
