<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Course;
use App\Models\CourseMembershipDiscount;
use App\Models\News;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
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
    }

    /**
     * Show the application dashboard.
     */
    public function index(Request $request)
    {
        $input = $request->input();
        $subjects = null;
        if (empty($input['certificate'])) {
            $subjects = Subject::with('certificate')->whereHas('certificate', function (Builder $query){
                return $query->where('id', 1);
            })->get();
        }else {
            $subjects = Subject::with('certificate')->whereHas('certificate', function (Builder $query) use ($input){
                return $query->where('id', $input['certificate']);
            })->get();
        }

        $banners = Banner::query()->first();

        $courses_with_group = CourseMembershipDiscount::with(
            'membershipCourses',
            'courseDiscounts',
            'courseDiscounts.discount',
            'membershipCourses.course',
            'membershipCourses.course.subject',
            'membershipCourses.course.subject.certificate',
            'membershipCourses.course.tutor',
            'membershipCourses.course.courseMaterial'
        )
        ->whereHas('membershipCourses', function ($query) {
            return $query->where('membership_id', Auth::check() ? Auth::user()->membership_group : 1);
        });

        $course_recommended = clone $courses_with_group;
        $course_hot = clone $courses_with_group;
        $course_welcomes = clone $courses_with_group;
        $course_latest = clone $courses_with_group;

        $course_recommended = $course_recommended->where('recommended', 1)->limit(4)->get();

        $course_hot = $course_hot->where('hot', 1);
        $course_welcomes = $course_welcomes->where('welcomes', 1)->limit(2)->get();
        // DB::enableQueryLog();

        $course_latest = $course_latest->whereHas('courseDiscounts.discount', function($query){
            return $query->where('start_date','<=', DATE(NOW()))
                ->where('end_date','>=', DATE(NOW()));
        })->limit(2)->get();

        $courseIGCSE= clone $course_hot;

        $courseIGCSE->whereHas('membershipCourses.course.subject.certificate', function ( $query )
        {
            return $query->where('id', 1);
        })->get();
        
        $courseUKISET= clone $course_hot;

        $courseUKISET->whereHas('membershipCourses.course.subject.certificate', function ( $query )
        {
            return $query->where('id', 2);
        })->get();
        
        $courseIELTS= clone $course_hot;

        $courseIELTS->whereHas('membershipCourses.course.subject.certificate', function ( $query )
        {
            return $query->where('id', 3);
        })->get();
        
        $courseIAL= clone $course_hot;

        $courseIAL->whereHas('membershipCourses.course.subject.certificate', function ( $query )
        {
            return $query->where('id', 4);
        })->get();

        // dd(DB::getQueryLog());


        $courseVideo = Course::with('tutor', 'lecture')->first();
        $news = News::query()->orderByDesc('created_at')->limit(8)->get();
        
        return view('home.home-page',[
            'banners' => $banners,
            'courseVideo'=>$courseVideo,
            'news' => $news,
            'course_recommended'=>$course_recommended,
            'course_hot'=>$course_hot,
            'course_welcomes'=>$course_welcomes,
            'course_latest'=>$course_latest,
            'subjects'=>$subjects,
            'courseIGCSE' => $courseIGCSE->get(),
            'courseUKISET' => $courseUKISET->get(),
            'courseIELTS' => $courseIELTS->get(),
            'courseIAL' => $courseIAL->get(),
        ]);
    }
}

