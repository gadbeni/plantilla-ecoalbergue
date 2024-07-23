<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpecialPackage;

class SpecialPackageController extends Controller
{
    //
    public function showPublicPackage($id){
        $packages = SpecialPackage::find($id);
        return view('specialpackage.show', ['specialpackage' => $packages]);
    }
}
