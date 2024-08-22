<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    //
    public function index(){
        $rooms = Room::take(6)->orderBy('created_at', 'desc')->paginate(6);
        return view('rooms.index', ['rooms' => $rooms]);
    }
    public function showPublicRoom($id){
        $room = Room::find($id);
        return view('rooms.show', ['room' => $room]);
    }
}
