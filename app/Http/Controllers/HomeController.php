<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     //   $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banners = Banner::query()->orderByDesc('created_at')->first();
        $courses = Course::with('subject','tutor', 'certificate')->get();
        return view('home.home-page',[
            'banners' => $banners,
            'courses' => $courses
        ]);

    }
}
