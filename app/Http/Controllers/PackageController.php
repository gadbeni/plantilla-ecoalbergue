<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class PackageController extends Controller
{
     //package
     public function about(){
        $page = Page::where('slug', 'sobre-nosotros')->first();
        return view('pages.about', compact('page'));
    }
}
