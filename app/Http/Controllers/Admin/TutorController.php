<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tutor\CreateTutorRequest;
use App\Http\Requests\Tutor\UpdateTutorRequest;
use App\Models\Subject;
use App\Models\Tutor;
use App\Models\TutorTeachSubject;
use App\Models\User;
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
            ->with('subject', 'translations')
            ->when(request('name') != '', function (Builder $query) {
                $query->where('full_name', 'like', '%' . request('name') . '%');
            })
            ->when(request('subject') != '', function (Builder $query) {
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
        if ($_request = $request->validated()) {

            $_user = new User([
                "name" => $_request["name"],
                "email" => $_request["email"],
                "password" => $_request["password"]
            ]);

            $_user->save();

            unset($_request["name"]);
            unset($_request["email"]);
            unset($_request["password"]);

            $_subject = $_request['subject_id'];
            unset($_request['subject_id']);
            $tutor = new Tutor([
                "user_id" => $_user->id,
                "full_name" => $_request["full_name"],
                "tutor_info:en"  => $_request["tutor_info:en"],
                "tutor_info:cn"  => $_request["tutor_info:cn"],
                "tutor_info:sc"  => $_request["tutor_info:sc"],
                "tutor_level:en"  => $_request["tutor_level:en"],
                "tutor_level:cn"  => $_request["tutor_level:cn"],
                "tutor_level:sc"  => $_request["tutor_level:sc"],
                "tutor_experience:en"  => $_request["tutor_experience:en"],
                "tutor_experience:cn"  => $_request["tutor_experience:cn"],
                "tutor_experience:sc"  => $_request["tutor_experience:sc"],
                "tutor_specialized:en"  => $_request["tutor_specialized:en"],
                "tutor_specialized:cn"  => $_request["tutor_specialized:cn"],
                "tutor_specialized:sc"  => $_request["tutor_specialized:sc"]
            ]);
            $tutor->save();

            $tutorTeachSubject = new TutorTeachSubject(['tutor_id' => $tutor->id, 'subject_id' => $_subject]);
            $tutorTeachSubject->save();
        };

        return back()->with('success', 'Create success');
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
