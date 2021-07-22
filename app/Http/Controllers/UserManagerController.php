<?php

namespace App\Http\Controllers;

use App\Models\Moderator;
use App\Models\Student;
use App\Models\Tutor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function moderatorIndex()
    {
        $moderator = Moderator::with('user')->paginate(15);
        return view('admin.user-manager.Moderator.index', [
            'moderator' => $moderator
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @return View
     */
    public function moderatorEdit($id)
    {
        $moderator = Moderator::with('user')->where('id', $id)->first();
        return view('admin.user-manager.Moderator.edit', [
            'moderator' => $moderator
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function studentIndex()
    {
        $students = Student::with('user')->paginate(15);
        return view('admin.user-manager.Student.index', [
            'students' => $students
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @return View
     */
    public function studentEdit($id)
    {
        $student = Student::with('user')->where('id', $id)->first();
        return view('admin.user-manager.Student.edit', [
            'student' => $student
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function tutorIndex()
    {
        $tutors = Tutor::with('translations','user')
            ->when(request('name') != '', function (Builder $query) {
                $query->where('full_name', 'like', '%' . request('name') . '%');
            })
            ->paginate(15)
            ->withQueryString();
        return view('admin.user-manager.Tutor.index', [
            'tutors' => $tutors
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @return View
     */
    public function tutorEdit($id)
    {
        $tutor = Tutor::with('user','subject')->where('id', $id)->first();
        return view('admin.user-manager.Tutor.edit', [
            'tutor' => $tutor
        ]);
    }

}
