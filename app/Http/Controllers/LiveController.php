<?php

namespace App\Http\Controllers;

use App\Models\RoomLiveCourse;
use Illuminate\Http\Request;

class LiveController extends Controller
{
    public function show($room_live_course_id)
    {
        $room = RoomLiveCourse::with('course')->find($room_live_course_id);
        return view('course.lesson-page', [
            'room' => $room
        ]);
    }
}
