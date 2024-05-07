<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class PagesController extends Controller
{
    //about
    public function about(){
        $page = Page::where('slug', 'sobre-nosotros')->first();
        return view('pages.about', compact('page'));
    }
}
