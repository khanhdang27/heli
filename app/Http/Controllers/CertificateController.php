<?php

namespace App\Http\Controllers;

use App\Http\Requests\Certificate\CreateCertificateRequest;
use App\Models\Certificate;
use App\Models\Course;
use App\Models\CourseMembershipDiscount;
use App\Models\Subject;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $certificates = Certificate::where('id', '!=', 1)->orderBy('created_at', 'desc')->paginate(15);
        return view('admin.certificate.index', [
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
     * @param CreateCertificateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateCertificateRequest $request)
    {
        DB::beginTransaction();

        try {
            $certificate = new Certificate(
                $request->validated()
            );
            $certificate->save();
            DB::commit();
            return back()->with('success', 'Create success');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors('Create error');
        }
        
    }


    /**
     * Display the specified resource.
     *
     * @param Certificate $certificate
     * @return View
     */
    public function show(Certificate $certificate, Request $request)
    {
        $input = $request->input();
        $subjects = null;
        if (empty($input['certificate'])) {
            $subjects = Subject::with('certificate')->whereHas('certificate', function (Builder $query) {
                return $query->where('id', 1);
            })->get();
        } else {
            $subjects = Subject::with('certificate')->whereHas('certificate', function (Builder $query) use ($input) {
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
        )->where('publish', 1)
            ->whereHas('membershipCourses', function ($query) {
                return $query->where('membership_id', Auth::check() ? Auth::user()->membership_group : 1);
            })
            ->whereHas('membershipCourses.course.subject.certificate', function ($query) use ($certificate) {
                return $query->where('id', $certificate->id);
            })->when(!empty($input['sort']), function ($query) use ($input) {
                switch ($input['sort']) {
                    case 'latest':
                        return $query->orderBy('created_at', 'desc');
                    case 'price':
                        return $query->whereHas('membershipCourses.course', function ($query) {
                            return $query->orderBy('course_price', 'asc');
                        });
                        break;
                    case 'live':
                        return $query->whereHas('membershipCourses.course', function ($query) {
                            return $query->where('type', Course::LIVE);
                        });
                        break;
                    case 'record':
                        return $query->whereHas('membershipCourses.course', function ($query) {
                            return $query->where('type', Course::RECORD);
                        });
                        break;
                    case 'document':
                        $query->whereHas('membershipCourses.course', function ($query) {
                            return $query->where('type', Course::DOCUMENT);
                        });
                    default:
                        break;
                }
            })->latest('created_at')->simplePaginate(15);

        return view('certificate.index', [
            'courses' => $courses_with_group,
            'certificate' => $_certificate,
            'subjects' => $subjects
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Certificate $certificate
     * @return View
     */
    public function edit(Certificate $certificate)
    {
        return view('admin.certificate.edit', [
            'certificate' => $certificate
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CreateCertificateRequest $request
     * @param Certificate $certificate
     * @return \Illuminate\Http\RedirectResponse
     *
     */
    public function update(CreateCertificateRequest $request, Certificate $certificate)
    {
        $certificate->update(
            $request->validated()
        );
        return redirect()->route('admin.certificate.index')
            ->with('success', 'Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Certificate $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificate $certificate)
    {
        DB::beginTransaction();
        try {
            $_subjects = $certificate->subject->toArray();
            if (empty($_subjects)) {
                $certificate->delete();
                DB::commit();
                return response([
                    'message' => 'Delete success!'
                ]);
            } else {
                return response([
                    'message' => 'Cannot delete!'
                ], 400);
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return response([
                'message' => 'Cannot delete',
                'detail' => $th->getMessage()
            ], 400);
        }
    }
}
