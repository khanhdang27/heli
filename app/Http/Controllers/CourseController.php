<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\CreateCourseRequest;
use App\Models\Course;
use App\Models\CourseMembershipDiscount;
use App\Models\Lecture;
use App\Models\Membership;
use App\Models\MembershipCourse;
use App\Models\StudentCourses;
use App\Models\Tutor;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $tutors = Tutor::all();
        $courses = Course::query()
            ->with('tutor', 'translations')
            ->when(request('name') != '', function (Builder $query) {
                $query->whereTranslationLike('course_name', '%' . request('name') . '%');
            })
            ->when(request('tutor') != '', function (Builder $query) {
                $query->where('tutor_id', request('tutor'));
            })
            ->paginate(20)
            ->withQueryString();
        return view('admin.course.index', [
            'courses' => $courses,
            'tutors' => $tutors
        ]);
    }

    public function my()
    {
        $courses = CourseMembershipDiscount::with(
            'membershipCourses',  
            'membershipCourses.course',
            'membershipCourses.course.tutor',
            'membershipCourses.course.student'
        )->whereHas('membershipCourses.course.student', function (Builder $query) {
                $query->where('student_id', Auth::user()->id);
            })->get();

        return view('course.my-course-page', ['courses'=> $courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $tutors = Tutor::all();

        return view('admin.course.create', [
            'tutors' => $tutors
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateCourseRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateCourseRequest $request)
    {
        $input = $request->validated();
        DB::beginTransaction();
        try {
            $course = Course::create(
                $input
            );
            $memberships = Membership::all();
    
            foreach ( $memberships as $membership ) {
                $membershipCourse = MembershipCourse::create([
                    'membership_id'=> $membership->id,
                    'course_id' => $course->id,
                    'price_value' => $course->course_price
                ]);

                CourseMembershipDiscount::create([
                    'membership_course_id' => $membershipCourse->id,
                ]);
            }
            DB::commit();
            return back()->with('success', 'Create success!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('errors', 'Create Error!');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return View
     */
    public function show(Course $course)
    {

        $courses_with_group = CourseMembershipDiscount::with(
            'membershipCourses', 
            'courseDiscounts', 
            'membershipCourses.course',
            'membershipCourses.course.lecture',
            'membershipCourses.course.comment',
            'membershipCourses.course.subject',
            'membershipCourses.course.tutor',
            'membershipCourses.course.courseMaterial'
        )
        ->whereHas('membershipCourses', function ($query) {
            return $query->where('membership_id', Auth::check() ? Auth::user()->membership_group : 1);
         })->whereHas('membershipCourses.course', function ($query) use ($course){
            return $query->where('id', $course->id);
         })->first();

        $student_course  = null;
        if (Auth::check()){
            $student_course = StudentCourses::where([
                'course_id'=> $course->id, 'student_id'=>Auth::user()->id
            ])->first();
        }
        return view('course.course-page',[
            'courseDetail' => $courses_with_group,
            'student_course' => $student_course,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Course $course
     * @return View
     */
    public function edit(Course $course)
    {
        $tutors = Tutor::all();
        $course->load('translations');
        return view('admin.course.edit', [
            'course' => $course,
            'tutors' => $tutors,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CreateCourseRequest $request
     * @param \App\Models\Course $course
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CreateCourseRequest $request, Course $course)
    {
        $course->update(
            $request->validated()
        );
        return back()->with('success', 'Update success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        try {
            $course->delete();
            return response([
                'message' => 'Delete success!'
            ]);
        } catch (\Exception $exception) {
            return response([
                'message' => 'Cannot delete course'
            ], 400);
        }
    }

    public function lectures(Course $course)
    {
        $_course = Course::find($course->id)->with('lectures')->first();
        return view('admin.course.lecture.index', [
            'course' => $_course
        ]);
    }

    public function createLecture(Course $course)
    {
        return view('admin.course.lecture.create', [
            'course' => $course
        ]);
    }

    public function storeLecture(Request $request, Course $course)
    {
        $input = $request->input();
        DB::beginTransaction();

        try {
            $lecture = Lecture::create([
                'course_id' => $course->id,
                'lectures_name' => $input['lectures_name'],
                'lectures_description' => $input['lectures_description'],
                'video_resource' => $input['video_resource'],
                'is_live' => $input['is_live'],
                'course_schedule_id' => 0//$input['course_schedule_id']
            ]);

            DB::commit();
            return response()->json(['status' => 200, 'message' => 'succeed']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['status' => 400, 'message' => 'fails'], 400);
        }
    }

    public function editLecture(Course $course, Lecture $lecture)
    {
        # code...
    }

    public function updateLecture(Course $course, Lecture $lecture)
    {
        # code...
    }

    public function destroyLecture(Course $course, Lecture $lecture)
    {
        # code...
    }

}
