<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\Models\Room;
use App\Models\SpecialPackage;
use App\Models\Request as RequestModel;

class HomeController extends Controller
{
    //
    public function index()
    {
        // ultimos 3 post
        $page = Page::where('slug', 'sobre-nosotros')->first();
        $posts = Post::take(4)->where('language','es')->orderBy('created_at', 'desc')->get();
        $rooms = Room::take(4)->where('language','es')->get();
        $specialPackages = SpecialPackage::take(3)->get();
        $count = [
            'visitas' => RequestModel::count(),
        ];

        return view('welcome', compact(['page', 'posts','rooms','specialPackages', 'count']));
    }
    public function indexEn(){
        // ultimos 3 post
        $page = Page::where('slug', 'about-us')->first();
        $posts = Post::take(4)->where('language','en')->orderBy('created_at', 'desc')->get();
        $rooms = Room::take(4)->where('language','en')->get();
        $specialPackages = SpecialPackage::take(3)->get();
        $count = [
            'visitas' => RequestModel::count(),
        ];

        return view('en.welcome', compact(['page', 'posts','rooms','specialPackages', 'count']));
    }
}
