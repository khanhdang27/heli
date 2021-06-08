<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subject\CreateSubjectRequest;
use App\Models\Certificate;
use App\Models\PostTag;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $certificates = Certificate::all();
        $subjects = Subject::where('status', 1)->latest()->get();
        return view('admin.subject.index', [
            'subjects' => $subjects,
            'certificates' =>$certificates
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $certificates = Certificate::all();
        return view('admin.subject.create',[
            'certificates' => $certificates
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateSubjectRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateSubjectRequest $request)
    {

        Subject::create(
            $request->validated()
        );
        return back()->with('success', 'Create success');
    }

    /**
     * Display the specified resource.
     *
     * @param Subject $subject
     * @return view
     */
    public function show(Subject $subject)
    {
        $certificates = Certificate::all();
        return view('subject.index', [
            'subject' => $subject,
            'certificate' => $certificates
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Subject $subject
     * @return View
     */
    public function edit(Subject $subject)
    {

        return view('admin.subject.edit', [
            'subject' => $subject,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Subject $subject
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CreateSubjectRequest $request, Subject $subject)
    {
        $subject->update(
            $request->validated()
        );
        return redirect()->route('admin.subject.index')
            ->with('success', 'update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Subject $subject
     *
     */

    public function updateActive(int $id)
    {
//        $subject = Subject::find($id);
//
//        $active = $subject->status;
//
//        $subject->status = $active == 1 ? 0 : 0;
//
//        $subject->save();
//
//        return $subject->save();
    }

    public function destroy(Subject $subject)
    {
        $active = $subject->status;
        $subject->status = $active == 1 ? 0 : 0;
        $subject->save();

        return $subject->save();
    }

    /**
     * @param Request $request
     * @return array
     */
    public function getSubjectByParentId(Request $request, $id)
    {
        $certificate_id = $id;
        if (!is_numeric($certificate_id)) {
            $subject = Subject::getValues($certificate_id, true);
        } else {
            $subject = Subject::getValues($certificate_id);

        }

        return $subject;
    }

}
