<?php

namespace App\Http\Controllers;

use App\Models\StudentSchedule;
use Carbon\Carbon;
use Spatie\GoogleCalendar\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

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

        // , Carbon $startDateTime = null, Carbon $endDateTime = null,
        $first_day_of_the_current_month = Carbon::create()->month($month)->year(date("Y"))->startOfMonth();
        $last_day_of_the_current_month = $first_day_of_the_current_month->copy()->endOfMonth();
        $event = Event::get($first_day_of_the_current_month, $last_day_of_the_current_month, [], 'en.hong_kong.official#holiday@group.v.calendar.google.com' );


        return response()->json(['schedule'=> $schedule, 'event' => $event]);
    }
}
