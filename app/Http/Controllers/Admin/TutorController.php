<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tutor\CreateTutorRequest;
use App\Http\Requests\Tutor\UpdateTutorRequest;
use App\Models\Subject;
use App\Models\Tutor;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $subjects = Subject::all();
        $tutors = Tutor::query()
            ->with('subjects', 'translations')
            ->when(request('name') != '', function (Builder $query) {
                $query->where('tutor_name', 'like', '%' . request('name') . '%');
            })
            ->when(request('subjects') != '', function (Builder $query) {
                $query->where('subject_id', request('subject'));
            })
            ->paginate(20)
            ->withQueryString();
        return view('admin.tutor.index', [
            'tutors'   => $tutors,
            'subjects' => $subjects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $subjects = Subject::all();
        return view('admin.tutor.create', [
            'subjects' => $subjects
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateTutorRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateTutorRequest $request)
    {
        $tutor = new Tutor(
            $request->validated()
        );
        $tutor->tutor_photo = $request->file('tutor_photo')->store('photo');
        $tutor->save();
        return back()->with('success', 'Delete success');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Tutor $tutor
     * @return \Illuminate\Http\Response
     */
    public function show(Tutor $tutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Tutor $tutor
     * @return View
     */
    public function edit(Tutor $tutor)
    {
        $subjects = Subject::all();
        $tutor->load('translations');
        return view('admin.tutor.edit', [
            'tutor'    => $tutor,
            'subjects' => $subjects,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTutorRequest $request
     * @param \App\Models\Tutor $tutor
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateTutorRequest $request, Tutor $tutor)
    {
        $tutor->fill(
            $request->validated()
        );
        $imageDelete = null;
        if ($request->hasFile('tutor_photo')) {
            $imageDelete = $tutor->tutor_photo;
            $tutor->tutor_photo = $request->file('tutor_photo')->store('photo');
        }
        $tutor->save();
        if ($imageDelete) {
            Storage::delete($imageDelete);
        }
        return back()->with('success', 'Update success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Tutor $tutor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutor $tutor)
    {
        try {
            $tutor->delete();
            Storage::delete($tutor->tutor_image);
            return response([
                'message' => 'Delete success!'
            ]);
        } catch (\Exception $exception) {
            return response([
                'message' => 'Cannot delete',
            ], 400);
        }
    }


}
