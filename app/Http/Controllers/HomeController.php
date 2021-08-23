<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Course;
use App\Models\CourseMembershipDiscount;
use App\Models\News;
use App\Models\StudentCourses;
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

        [
            $course_recommended,
            $course_hot,
            $course_welcomes,
            $course_latest
        ] = $this->getDuplicateCourseByGroupUser();

        [
            $courseIGCSE,
            $courseIELTS,
            $courseUKISET,
            $courseIAL
        ] = $this->getCourseHotByTag($course_hot);

        [$courseVideo, $latesLecture] = $this->getCourseVideo();

        $news = News::query()->orderByDesc('created_at')->limit(8)->get();

        return view('home.home-page',[
            'banners' => $banners,
            'courseVideo'=>$courseVideo,
            'latesLecture' => $latesLecture,
            'news' => $news,
            'course_recommended'=>$course_recommended,
            'course_hot'=>$course_hot,
            'course_welcomes'=>$course_welcomes,
            'course_latest'=>$course_latest,
            'subjects'=>$subjects,
            'courseIGCSE' => $courseIGCSE->latest('created_at')->get(),
            'courseUKISET' => $courseUKISET->latest('created_at')->get(),
            'courseIELTS' => $courseIELTS->latest('created_at')->get(),
            'courseIAL' => $courseIAL->latest('created_at')->get(),
        ]);
    }

    function getCourseVideo() {
        if (Auth::check()) {
            $user_course = StudentCourses::where('student_id', Auth::user()->id)->latest('latest_study')->first();
            if (empty($user_course)) {
                $course = Course::with('tutor', 'lecture')->whereHas('lecture', function($query) {
                    return $query->where(['id'=>1]);
                })->first();

                return [$course, null];
            } else {
                $course = Course::with('tutor', 'lecture')->where('id', $user_course->course_id)->first();
                if (empty($course->lecture[0])) {
                    $course = Course::with('tutor', 'lecture')->where('id', 1)->first();
                    return [$course, null];
                } else {
                    return [$course, $user_course->lecture_study];
                }
            }
        } else {
            return [Course::with('tutor', 'lecture')->where('id', 1)->first(), null];
        }
    }

    function getCourseHotByTag($course_hot)
    {
        $courseIGCSE= clone $course_hot;
        $courseIELTS= clone $course_hot;
        $courseUKISET= clone $course_hot;
        $courseIAL= clone $course_hot;

        $courseIGCSE->whereHas('membershipCourses.course.subject.certificate', function ( $query )
        {
            return $query->where('id', 2);
        })->paginate(15);

        $courseUKISET->whereHas('membershipCourses.course.subject.certificate', function ( $query )
        {
            return $query->where('id', 3);
        })->paginate(15);

        $courseIELTS->whereHas('membershipCourses.course.subject.certificate', function ( $query )
        {
            return $query->where('id', 4);
        })->paginate(15);

        $courseIAL->whereHas('membershipCourses.course.subject.certificate', function ( $query )
        {
            return $query->where('id', 5);
        })->paginate(15);

        return [
            $courseIGCSE,
            $courseIELTS,
            $courseUKISET,
            $courseIAL
        ];
    }

    function getDuplicateCourseByGroupUser()
    {
        $courses_with_group = CourseMembershipDiscount::with(
            'membershipCourses',
            'courseDiscounts',
            'courseDiscounts.discount',
            'membershipCourses.course',
            'membershipCourses.course.subject',
            'membershipCourses.course.subject.certificate',
            'membershipCourses.course.tutor',
            'membershipCourses.course.courseMaterial'
        )->where('publish', true)
        ->whereHas('membershipCourses', function ($query) {
            return $query->where('membership_id', Auth::check() ? Auth::user()->membership_group : 1);
        });

        $course_recommended = clone $courses_with_group;
        $course_hot = clone $courses_with_group;
        $course_welcomes = clone $courses_with_group;
        $course_latest = clone $courses_with_group;

        $course_recommended = $course_recommended->where('recommended', true)->limit(4)->get();
        $course_hot = $course_hot->where('hot', true);
        $course_welcomes = $course_welcomes->where('welcomes', true)->limit(2)->get();
        $course_latest = $course_latest->whereHas('courseDiscounts.discount', function($query){
            return $query->where('start_date','<=', DATE(NOW()))
                ->where('end_date','>=', DATE(NOW()));
        })->limit(2)->get();

        return [
            $course_recommended,
            $course_hot,
            $course_welcomes,
            $course_latest
        ];
    }
}

