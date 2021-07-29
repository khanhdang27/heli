<?php

namespace App\Http\Controllers;

use App\Models\StudentSchedule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedule = StudentSchedule::where('student_id', Auth::user()->id)->get();
        return view('calendar-page', [
            'schedule' => $schedule
        ]);
    }
}
