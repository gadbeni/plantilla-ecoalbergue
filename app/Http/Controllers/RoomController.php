<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    //Spanish version
    public function index(){
        // filter room by language
        $rooms = Room::take(6)
        ->where('language', 'es')
        ->orderBy('created_at', 'desc')->paginate(6);

        return view('rooms.index', ['rooms' => $rooms]);
    }


    public function showPublicRoom($id){
        $room = Room::find($id);
        return view('rooms.show', ['room' => $room]);
    }

    //english version
    public function indexEn(){
        $rooms = Room::take(6)
        ->where('language', 'en')
        ->orderBy('created_at', 'desc')->paginate(6);
        
        return view('rooms.en.index', ['rooms' => $rooms]);
    }

}
