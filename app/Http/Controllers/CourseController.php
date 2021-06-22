<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\CreateCourseRequest;
use App\Http\Requests\Course\CreateVideoRequest;
use App\Http\Requests\Course\UpdateVideoRequest;
use App\Models\Course;
use App\Models\CourseMembershipDiscount;
use App\Models\Lecture;
use App\Models\Membership;
use App\Models\MembershipCourse;
use App\Models\StudentCourses;
use App\Models\Tutor;
use App\Models\UserLike;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;

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
        $courses = Course::with('tutor', 'translations', 'student')
            ->whereHas('student', function (Builder $query) {
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
            return back()->with('error', 'Create Error!');

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
        $courseDetail = Course::with('subject','tutor','courseMaterial')
            ->find($course->id);
        $student_course  = null;
        if (Auth::check()){
            $student_course = StudentCourses::where([
                'course_id'=> $course->id, 'student_id'=>Auth::user()->id
            ])->first();
        }
        return view('course.course-page',[
            'courseDetail' => $courseDetail,
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

    // public function videoList(Course $course)
    // {
    //     $course->load('videos.translations');
    //     return view('admin.course.video.index', [
    //         'course' => $course
    //     ]);
    // }

    // public function createVideo(Course $course)
    // {
    //     return view('admin.course.video.create', [
    //         'course' => $course
    //     ]);
    // }

    // public function storeVideo(Course $course, CreateVideoRequest $request)
    // {
    //     $lecture = new Lecture(
    //         $request->validated()
    //     );
    //     $lecture->course_video_file = $request->file('course_video_file')->store('video', 'local');
    //     $course->videos()->save($lecture);
    //     return redirect()->route('admin.course.video.index', $course->id)
    //         ->with('success', 'Create success!');
    // }

    // public function downloadVideo(Course $course, Lecture $lecture)
    // {
    //     return response()->download(storage_path('app/' . $lecture->course_video_file));
    // }

    // public function editVideo(Course $course, Lecture $lecture)
    // {
    //     $lecture->load('translations');
    //     return view('admin.course.video.edit', [
    //         'course'      => $course,
    //         'lecture' => $lecture
    //     ]);
    // }

    // public function updateVideo(Course $course, Lecture $lecture, UpdateVideoRequest $request)
    // {
    //     $fileDelete = $lecture->course_video_file;
    //     $changeFile = false;
    //     $lecture->fill(
    //         $request->validated()
    //     );
    //     if ($request->hasFile('course_video_file')) {
    //         $lecture->course_video_file = $request->file('course_video_file')->store('video', 'local');
    //         $changeFile = true;
    //     }

    //     $lecture->save();
    //     if ($changeFile) {
    //         Storage::disk('local')->delete($fileDelete);
    //     }
    //     return redirect()->route('admin.course.video.index', $course->id)
    //         ->with('success', 'Create success!');
    // }

    // public function destroyVideo(Course $course, Lecture $lecture)
    // {
    //     try {
    //         $lecture->delete();
    //         Storage::delete($lecture->course_video_file);
    //         return response([
    //             'message' => 'Delete success!'
    //         ]);
    //     } catch (\Exception $exception) {
    //         return response([
    //             'message' => 'Cannot delete video!'
    //         ], 400);
    //     }
    // }
}
