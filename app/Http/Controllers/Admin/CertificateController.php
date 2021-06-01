<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Certificate\CreateCertificateRequest;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Contracts\View\View;

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
            'certificates' => $certificates
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
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(Certificate $certificate)
    {
        //
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
        //
    }
}