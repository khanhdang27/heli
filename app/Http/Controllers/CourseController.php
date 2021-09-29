<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\CreateCourseRequest;
use App\Models\Course;
use App\Models\CourseMembershipDiscount;
use App\Models\CourseSchedule;
use App\Models\Lecture;
use App\Models\Membership;
use App\Models\MembershipCourse;
use App\Models\RoomLiveCourse;
use App\Models\StudentCourses;
use App\Models\Tutor;
use App\Models\User;
use App\Models\Exams;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

use Illuminate\Support\Carbon;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $_user = User::find(Auth::user()->id);
        $tutors = Tutor::all();
        $courses = Course::query()
            ->with('tutor', 'translations')
            ->when(request('name') != '', function (Builder $query) {
                $query->whereTranslationLike('course_name', '%' . request('name') . '%');
            })
            ->when(request('tutor') != '', function (Builder $query) {
                $query->where('tutor_id', request('tutor'));
            })
            ->when($_user->hasRole('tutor'), function (Builder $query) use ($_user) {
                $_user->load('tutor');
                $query->where('tutor_id', $_user->tutor->id);
            })
            ->orderByDesc('created_at')
            ->paginate(15)
            ->withQueryString();
        return view('admin.course.index', [
            'courses' => $courses,
            'tutors' => $tutors,
        ]);
    }

    public function my()
    {
        $courses = CourseMembershipDiscount::with('membershipCourses', 'membershipCourses.course', 'membershipCourses.course.tutor', 'membershipCourses.course.student')
            ->where('publish', 1)
            ->whereHas('membershipCourses.course.student', function (Builder $query) {
                $query->where('student_id', Auth::user()->id);
            })
            ->whereHas('membershipCourses', function (Builder $query) {
                $query->where('membership_id', Auth::user()->membership_group);
            })
            ->get();

        return view('course.my-course-page', ['courses' => $courses]);
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
            'tutors' => $tutors,
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
            $course = Course::create($input);
            $memberships = Membership::all();
            foreach ($memberships as $membership) {
                $membershipCourse = MembershipCourse::create([
                    'membership_id' => $membership->id,
                    'course_id' => $course->id,
                    'price_value' => $course->course_price,
                ]);
                CourseMembershipDiscount::create([
                    'membership_course_id' => $membershipCourse->id,
                ]);
            }
            DB::commit();
            return back()->with('success', 'Create success!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors('Create Error!');
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
        try {
            $courses_with_group = CourseMembershipDiscount::with('membershipCourses', 'courseDiscounts', 'membershipCourses.course', 'membershipCourses.course.rooms', 'membershipCourses.course.lecture', 'membershipCourses.course.comment', 'membershipCourses.course.subject', 'membershipCourses.course.tutor', 'membershipCourses.course.ratings', 'membershipCourses.course.rooms.studySession', 'membershipCourses.course.schedule', 'membershipCourses.course.courseMaterial', 'membershipCourses.course.examinations')
                ->where('publish', 1)
                ->whereHas('membershipCourses', function ($query) {
                    return $query->where('membership_id', Auth::check() ? Auth::user()->membership_group : 1);
                })
                ->whereHas('membershipCourses.course', function ($query) use ($course) {
                    return $query->where('id', $course->id);
                })
                ->first();

            if (empty($courses_with_group)) {
                return redirect(route('site.home'));
            }

            $student_course = null;
            if (Auth::check()) {
                $student_course = StudentCourses::query()
                    ->where('course_id', $course->id)
                    ->where('student_id', Auth::user()->id)
                    ->first();
            }
            return view('course.course-page', [
                'courseDetail' => $courses_with_group,
                'student_course' => $student_course,
            ]);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return View
     */
    public function lectureList(Course $course)
    {
        try {
            $courses = CourseMembershipDiscount::with('membershipCourses', 'membershipCourses.course', 'membershipCourses.course.lecture', 'membershipCourses.course.exams')
                ->where('publish', 1)
                ->whereHas('membershipCourses.course', function ($query) use ($course) {
                    return $query->where('id', $course->id);
                })
                ->first();

            $lecture_course = $courses->membershipCourses->course->lecture->concat($courses->membershipCourses->course->exams);

            return response()->json($lecture_course->sortBy('index'));
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return View
     */
    public function search(Request $request)
    {
        $input = $request->input('course');

        $courses_with_group = CourseMembershipDiscount::with('membershipCourses', 'courseDiscounts', 'membershipCourses.course', 'membershipCourses.course.translations', 'membershipCourses.course.lecture', 'membershipCourses.course.comment', 'membershipCourses.course.subject', 'membershipCourses.course.tutor', 'membershipCourses.course.courseMaterial')
            ->where('publish', 1)
            ->whereHas('membershipCourses', function ($query) {
                return $query->where('membership_id', Auth::check() ? Auth::user()->membership_group : 1);
            })
            ->whereHas('membershipCourses.course', function ($query) use ($input) {
                return $query->whereTranslationLike('course_name', '%' . $input . '%');
            })
            ->latest('created_at')
            ->paginate(15);

        return view('course.search', [
            'courses' => $courses_with_group,
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
        $course->update($request->validated());
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
        // try {
        //     $course->delete();
        //     return response([
        //         'message' => 'Delete success!'
        //     ]);
        // } catch (\Exception $exception) {
        //     return response([
        //         'message' => 'Cannot delete course'
        //     ], 400);
        // }
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, ['path' => URL::current()]);
    }

    public function lectures(Course $course)
    {
        $course->load('lecture', 'exams');

        $data = $this->paginate($course->lecture->concat($course->exams)->sortBy('index'), 15);

        return view('admin.course.lecture.index', [
            'course' => $course,
            'data' => $data,
        ]);
    }

    public function lectureIndexing(Request $request, Course $course)
    {
        dd($request->input());
    }

    public function createLecture(Course $course)
    {
        return view('admin.course.lecture.create', [
            'course' => $course,
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
            ]);

            DB::commit();
            return response()->json(['status' => 200, 'message' => 'succeed']);
        } catch (\Throwable $th) {
            DB::rollback();
            // dd($th);
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
        try {
            $lecture->delete();
            return response([
                'message' => 'Delete success!',
            ]);
        } catch (\Exception $exception) {
            return response(
                [
                    'message' => 'Cannot delete course',
                ],
                400,
            );
        }
    }

    public function rooms(Course $course)
    {
        $_course = $course->load('rooms');
        $rooms = RoomLiveCourse::with('studySession')
            ->where('course_id', $_course->id)
            ->paginate(15);
        return view('admin.course.room.index', [
            'course' => $_course,
            'rooms' => $rooms,
        ]);
    }

    public function createRoom(Course $course)
    {
        return view('admin.course.room.create', [
            'course' => $course,
        ]);
    }

    public function editRoom(Course $course, RoomLiveCourse $room)
    {
        return view('admin.course.room.edit', [
            'course' => $course,
            'room' => $room,
        ]);
    }

    public function listScheduleByRoom(Course $course, RoomLiveCourse $room)
    {
        $study_schedules = CourseSchedule::with('room')->paginate(15);
        return view('admin.course.room.shedulers', [
            'course' => $course,
            'room' => $room,
            'schedules' => $study_schedules,
        ]);
    }

    public function storeRoom(Request $request, Course $course)
    {
        $input = $request->input();
        DB::beginTransaction();
        try {
            $room = RoomLiveCourse::create([
                'course_id' => $course->id,
                'study_session_id' => $input['study_session_id'],
                'room_live_code' => $input['room_live_code'],
                'start_date' => date('Y-m-d', strtotime($input['start_date'])),
                'number_session' => $input['number_session'],
                'number_member' => 0,
                'number_member_maximum' => $input['number_member_maximum'],
            ]);

            for ($i = 0; $i < $input['number_session']; $i++) {
                CourseSchedule::create([
                    'course_id' => $course->id,
                    'study_session_id' => $input['study_session_id'],
                    'tutor_id' => $course->tutor_id,
                    'is_test' => false,
                    'room_live_course_id' => $room->id,
                    'date' => Carbon::create($input['start_date'])
                        ->addWeek($i)
                        ->format('Y-m-d'),
                ]);
            }

            DB::commit();
            return back()->with('success', 'Create success!');
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->withErrors('Create error!');
        }
    }

    public function updateRoom(Request $request, Course $course, RoomLiveCourse $room)
    {
        $input = $request->input();
        DB::beginTransaction();
        try {
            $room->update([
                'study_session_id' => $input['study_session_id'],
                'room_live_code' => $input['room_live_code'],
                'number_member_maximum' => $input['number_member_maximum'],
            ]);

            DB::commit();
            return back()->with('success', 'Update success!');
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return back()->withErrors('Create error!');
        }
    }

    public function destroyRoom(Course $course, RoomLiveCourse $room)
    {
        try {
            $room->delete();
            return response([
                'message' => 'Delete success!',
            ]);
        } catch (\Exception $exception) {
            return response(
                [
                    'message' => 'Cannot delete course',
                ],
                400,
            );
        }
    }

    public function createExam(Course $course)
    {
        return view('admin.course.exam_quiz.create', [
            'course' => $course,
        ]);
    }

    public function storeExam(Request $request, Course $course)
    {
        $input = $request->input();
        DB::beginTransaction();
        try {
            $lecture = Exams::create([
                'course_id' => $course->id,
                'name' => $input['name'],
                'index' => $input['index'],
                'type' => $input['type'],
            ]);

            DB::commit();
            return back()->with('success', 'Create success!');
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->withErrors('errors', 'Create errors!');
        }
    }

    public function editExam(Course $course, Exam $exam)
    {
        # code...
    }

    public function updateExam(Course $course, Exam $exam)
    {
        # code...
    }

    public function destroyExam(Course $course, Exam $exam)
    {
        try {
            $exam->delete();
            return response([
                'message' => 'Delete success!',
            ]);
        } catch (\Exception $exception) {
            return response(
                [
                    'message' => 'Cannot delete course',
                ],
                400,
            );
        }
    }
}
