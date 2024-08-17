<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    //
    public function index(){
        $rooms = Room::all();
        return view('rooms.index', ['rooms' => $rooms]);
    }
    public function showPublicRoom($id){
        $room = Room::find($id);
        return view('rooms.show', ['room' => $room]);
    }
}
