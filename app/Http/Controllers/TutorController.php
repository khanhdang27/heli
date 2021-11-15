<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tutor\CreateTutorRequest;
use App\Http\Requests\Tutor\UpdateTutorRequest;
use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Subject;
use App\Models\Tutor;
use App\Models\TutorTeachSubject;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
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
            ->with('subject', 'translations', 'avatar','user')
            ->when(request('name') != '', function (Builder $query) {
                $query->where('full_name', 'like', '%' . request('name') . '%');
            })
            ->when(request('subject') != '', function (Builder $query) {
                $query->where('subject_id', request('subject'));
            })
            ->paginate(15)
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
    public function store(Request $request)
    {
        $_request = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'full_name' => 'required',
            'subject_id' => 'required',
            'password' => 'required',
            'tutor_info:en' => 'required',
            'tutor_info:cn' => 'required',
            'tutor_info:sc' => 'required',
            'tutor_level:en' => 'required',
            'tutor_level:cn' => 'required',
            'tutor_level:sc' => 'required',
            'tutor_experience:en' => 'required',
            'tutor_experience:cn' => 'required',
            'tutor_experience:sc' => 'required',
            'tutor_specialized:en' => 'required',
            'tutor_specialized:cn' => 'required',
            'tutor_specialized:sc' => 'required',
        ]);
        DB::beginTransaction();
        try {

            $_user = new User([
                "name" => $_request["name"],
                "email" => $_request["email"],
                "password" => $_request["password"]
            ]);
            $_user->assignRole('tutor');
            $_user->save();

            if (!empty($request['photo'])) {
                $file = File::storeFile(
                    $request['photo'],
                    User::class,
                    $_user->id,
                );
            }
            $_subject = $_request['subject_id'];
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
        $tutor->load(['translations', 'user', 'subject']);
        return view('admin.tutor.edit', [
            'tutor'    => $tutor,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTutorRequest $request
     * @param \App\Models\Tutor $tutor
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Tutor $tutor)
    {
        DB::beginTransaction();
        try {
            $input = $request->validate([
                'name' => 'required',
                'full_name' => 'required',
                'subject_id' => 'required',
                'tutor_info:en' => 'required',
                'tutor_info:cn' => 'required',
                'tutor_info:sc' => 'required',
                'tutor_level:en' => 'required',
                'tutor_level:cn' => 'required',
                'tutor_level:sc' => 'required',
                'tutor_experience:en' => 'required',
                'tutor_experience:cn' => 'required',
                'tutor_experience:sc' => 'required',
                'tutor_specialized:en' => 'required',
                'tutor_specialized:cn' => 'required',
                'tutor_specialized:sc' => 'required',
            ]);

            $user = User::find($tutor->user_id);
            $user->name = $input['name'];
            $tutor->fill([
                'full_name' => $input['full_name'],
                'tutor_info:en' => $input['tutor_info:en'],
                'tutor_info:cn' => $input['tutor_info:cn'],
                'tutor_info:sc' => $input['tutor_info:sc'],
                'tutor_level:en' => $input['tutor_level:en'],
                'tutor_level:cn' => $input['tutor_level:cn'],
                'tutor_level:sc' => $input['tutor_level:sc'],
                'tutor_experience:en' => $input['tutor_experience:en'],
                'tutor_experience:cn' => $input['tutor_experience:cn'],
                'tutor_experience:sc' => $input['tutor_experience:sc'],
                'tutor_specialized:en' => $input['tutor_specialized:en'],
                'tutor_specialized:cn' => $input['tutor_specialized:cn'],
                'tutor_specialized:sc' => $input['tutor_specialized:sc']
            ]);

            if (!empty($request['photo'])) {
                if (!empty($tutor->user->avatar)) {
                    $tutor->user->avatar->delete();
                }
                $file = File::storeFile(
                    $request['photo'],
                    User::class,
                    $user->id,
                );
            }
            $_oldTutorTeachSubject = TutorTeachSubject::where('tutor_id', $tutor->id)
                                        ->where('subject_id', $input['subject_id'])->first();
            if (empty($_oldTutorTeachSubject)) {
                $_teachSubject = TutorTeachSubject::where('tutor_id', $tutor->id)->first();
                $_teachSubject->delete();
                $tutorTeachSubject = new TutorTeachSubject(['tutor_id' => $tutor->id, 'subject_id' => $input['subject_id']]);
                $tutorTeachSubject->save();
            }
            $tutor->save();
            DB::commit();

            return back()->with('success', 'Update success!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors('Update error');
        }

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
