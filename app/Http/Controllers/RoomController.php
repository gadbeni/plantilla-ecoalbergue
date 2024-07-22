<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    //
    public function showPublicRoom($id){
        $room = Room::find($id);
        return view('rooms.show', ['room' => $room]);
    }
}
