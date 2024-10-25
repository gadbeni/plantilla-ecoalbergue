<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function getGallery($id)
    {
        // ultimos 3 post
        $gallery = Gallery::find($id);
        $images = json_decode($gallery->images, true);

        return view('gallery/show', compact(['gallery', 'images']));
    }
}
