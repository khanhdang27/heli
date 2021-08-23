<?php

namespace App\Http\Controllers;

use App\Models\StudentSchedule;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ScheduleController extends Controller
{
    public function index()
    {
        $schedule = StudentSchedule::where('student_id', Auth::user()->id)->get();
        return view('calendar-page', [
            'schedule' => $schedule
        ]);
    }
    public function getMonth($month)
    {
        $schedule = StudentSchedule::where('student_id', Auth::user()->id)
            ->with('course')
            ->with('studySession')
            ->whereMonth('date', $month)
            ->whereYear('date', date("Y"))
            ->get()->toArray();

        return response()->json($schedule);
    }
}
