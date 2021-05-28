<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\Subject;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
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
     * @param Subject $subject
     * @return Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Subject $subject
     * @return Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Subject $subject
     * @return Response
     */
    public function destroy(Subject $subject)
    {
        //
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
