<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->paginate(6);
        return view('posts.index', compact('posts'));
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
}
