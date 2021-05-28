<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\CreateCourseRequest;
use App\Http\Requests\Course\CreateVideoRequest;
use App\Http\Requests\Course\UpdateVideoRequest;
use App\Models\Course;
use App\Models\VideoManage;
use App\Models\Tutor;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;

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
        Course::create(
            $request->validated()
        );
        return back()->with('success', 'Create success!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
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

    public function videoList(Course $course)
    {
        $course->load('videos.translations');
        return view('admin.course.video.index', [
            'course' => $course
        ]);
    }

    public function createVideo(Course $course)
    {
        return view('admin.course.video.create', [
            'course' => $course
        ]);
    }

    public function storeVideo(Course $course, CreateVideoRequest $request)
    {
        $videoManage = new VideoManage(
            $request->validated()
        );
        $videoManage->course_video_file = $request->file('course_video_file')->store('video', 'local');
        $course->videos()->save($videoManage);
        return redirect()->route('admin.course.video.index', $course->id)
            ->with('success', 'Create success!');
    }

    public function downloadVideo(Course $course, VideoManage $videoManage)
    {
        return response()->download(storage_path('app/' . $videoManage->course_video_file));
    }

    public function editVideo(Course $course, VideoManage $videoManage)
    {
        $videoManage->load('translations');
        return view('admin.course.video.edit', [
            'course'      => $course,
            'videoManage' => $videoManage
        ]);
    }

    public function updateVideo(Course $course, VideoManage $videoManage, UpdateVideoRequest $request)
    {
        $fileDelete = $videoManage->course_video_file;
        $changeFile = false;
        $videoManage->fill(
            $request->validated()
        );
        if ($request->hasFile('course_video_file')) {
            $videoManage->course_video_file = $request->file('course_video_file')->store('video', 'local');
            $changeFile = true;
        }

        $videoManage->save();
        if ($changeFile) {
            Storage::disk('local')->delete($fileDelete);
        }
        return redirect()->route('admin.course.video.index', $course->id)
            ->with('success', 'Create success!');
    }

    public function destroyVideo(Course $course, VideoManage $videoManage)
    {
        try {
            $videoManage->delete();
            Storage::delete($videoManage->course_video_file);
            return response([
                'message' => 'Delete success!'
            ]);
        } catch (\Exception $exception) {
            return response([
                'message' => 'Cannot delete video!'
            ], 400);
        }
    }
}
