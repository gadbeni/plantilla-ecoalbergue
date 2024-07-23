<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\Models\Room;
use App\Models\SpecialPackage;

class HomeController extends Controller
{
    //
    public function index()
    {
        // ultimos 3 post
        $posts = Post::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->take(3)->get();
        $rooms = Room::take(4)->get();
        $specialPackages = SpecialPackage::take(3)->get();
        return view('welcome', compact(['posts','rooms','specialPackages']));
    }
}
