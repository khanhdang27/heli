<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Examination;
use App\Models\File;
use App\Models\StudentCourses;
use App\Models\StudentSchedule;
use App\Models\SubmitExamination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ExaminationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $courses = Course::with('tutor', 'translations')
            ->when(request('name') != '', function ($query) {
                $query->whereTranslationLike('course_name', '%' . request('name') . '%');
            })
            ->when(request('tutor') != '', function ($query) {
                $query->where('tutor_id', request('tutor'));
            })
            ->paginate(15)
            ->withQueryString();
        return view('admin.examination.index', [
            'courses' => $courses
        ]);
    }

    public function manageExamination($id)
    {
        $exams = Examination::with('course', 'submitExams')->where('course_id', $id)->paginate('15');
        return \view('admin.examination.manage-examination.index', [
            'exams' => $exams,
            'course_id' => $id
        ]);
    }

    public function addExamination($id)
    {
        return \view('admin.examination.manage-examination.create', [
            'course_id' => $id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'course_id' => 'required',
            'deadline' => 'required',
            'title' => 'required',
            'file' => 'required|file',
            'description' => ''
        ]);
        DB::beginTransaction();
        try {
            $newExam = Examination::create([
                'course_id' => $input['course_id'],
                'deadline' => $input['deadline'],
                'title' => $input['title'],
                'description' => $input['description']
            ]);

            if (!empty($input['file'])) {
                $file = File::storeFile($input['file'], Examination::class, $newExam->id);
            }

            $_studentsCourses =  StudentCourses::where('course_id', $input['course_id'])->get();

            foreach ($_studentsCourses as $_studentsCourse) {
                StudentSchedule::create([
                    'course_id'=> $input['course_id'],
                    'room_live_course_id' => 0,
                    'study_session_id' => 0,
                    'tutor_id' => $_studentsCourse->course->tutor_id,
                    'student_id' => $_studentsCourse->student_id,
                    'date' => $input['deadline'],
                    'is_test' => true,
                    'note' => $input['title']
                ]);
            }

            
            DB::commit();
            return back()->with('success', 'Save success');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors( 'Save error');
        }


    }

    public function submitExamination(Request $request)
    {
        $input = $request->validate([
            'examination_id' => 'required',
            'title' => 'required',
            'description' => '',
            'file' => 'required'
        ]);

        DB::beginTransaction();
        try {
            $submitExam = SubmitExamination::create([
                'student_id' => Auth::user()->id,
                'examination_id' => $input['examination_id'],
                'title' => $input['title'],
                'description' => $input['description'],
            ]);

            if (!empty($input['file'])) {
                File::storeFile($input['file'], SubmitExamination::class, $submitExam->id);
            }
            DB::commit();

            return redirect()->route('site.course.show', $submitExam->examination->course_id)->with('success', 'Save success');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors( 'Save error');
        }
    }

    public function unSubmitExamination($id)
    {
        $submitExam = SubmitExamination::where('id',$id)->first();
        if ($submitExam->delete()){
            $alreadyFile = File::where('fileable_id', $submitExam->id)->where('fileable_type', 'App\Models\SubmitExamination')->first();
            if (!empty($alreadyFile)) {
                $alreadyFile->delete();
            }
        }
        return back()->with('success'. 'Save success');
    }
    /**
     * Display the specified resource.
     *
     * @param \App\Examination $examination
     * @return \Illuminate\Http\Response
     */
    public function show(Examination $examination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Examination $examination
     * @return View
     */
    public function edit(Examination $examination)
    {
        return view('admin.examination.manage-examination.edit', [
            'exam' => $examination
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Examination $examination
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Examination $examination)
    {
        DB::beginTransaction();
        try {
            $examination->update(
                $request->validate([
                    'deadline' => 'required',
                    'title' => 'required',
                    'description' => ''
                ])
            );
            if (!empty($request->file)) {
                $alreadyFile = File::where('fileable_id', $examination->id)->where('fileable_type', 'App\Models\Examination')->first();
                if (!empty($alreadyFile)) {
                    $alreadyFile->delete();
                }
                $file = File::storeFile(
                    $request->file,
                    Examination::class,
                    $examination->id,
                );
            }
            DB::commit();
            return back()->with('success', 'Update success');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors( 'Save error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Examination $examination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Examination $examination)
    {
        //
    }
}
