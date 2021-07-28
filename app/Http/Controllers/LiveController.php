<?php

namespace App\Http\Controllers;

use App\Models\RoomLiveCourse;
use Illuminate\Http\Request;

class LiveController extends Controller
{
    public function show($id)
    {
        $room = RoomLiveCourse::with('course')->find($id);
        return view('course.lesson-page', [
            'room' => $room
        ]);
    }
}
