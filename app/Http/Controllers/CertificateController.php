<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\Subject;
use Illuminate\Contracts\View\View;
use App\Http\Requests\Certificate\CreateCertificateRequest;
use App\Models\CourseMembershipDiscount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $certificates = Certificate::all();
        return view('admin.certificate.index',[
            'certificates' => $certificates,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('admin.certificate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateCertificateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateCertificateRequest $request)
    {
        $certificate = new Certificate(
            $request->validated()
        );
        $certificate->save();
        return back()->with('success', 'Create success');
    }


    /**
     * Display the specified resource.
     *
     * @param  Certificate $certificate
     * @return View
     */
    public function show(Certificate $certificate, Request $request)
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

        $_certificate = Certificate::with('subject')->where('id', $certificate->id)->first();
        DB::enableQueryLog();
        $courses_with_group = CourseMembershipDiscount::with(
            'membershipCourses',
            'courseDiscounts',
            'membershipCourses.course',
            'membershipCourses.course.subject',
            'membershipCourses.course.subject.certificate',
            'membershipCourses.course.tutor',
            'membershipCourses.course.courseMaterial'
        )
        ->whereHas('membershipCourses', function ($query) {
            return $query->where('membership_id', Auth::check() ? Auth::user()->membership_group : 1);
         })
        ->whereHas('membershipCourses.course.subject.certificate', function ($query) use ($certificate){
            return $query->where('id', $certificate->id);
         })->get();
        // dd(DB::getQueryLog());

        return view('certificate.index', [
            'courses' => $courses_with_group,
            'certificate' => $_certificate,
            'subjects' => $subjects
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Certificate  $certificate
     * @return View
     */
    public function edit(Certificate $certificate)
    {
        return view('admin.certificate.edit',[
            'certificate' => $certificate
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CreateCertificateRequest  $request
     * @param  Certificate  $certificate
     * @return \Illuminate\Http\RedirectResponse
     *
     */
    public function update(CreateCertificateRequest $request, Certificate $certificate)
    {
        $certificate->update(
            $request->validated()
        );
        return redirect()->route('admin.certificate.index')
            ->with('success', 'update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificate $certificate)
    {
        $as = $certificate->delete();
        // dd($as);
    }
}
