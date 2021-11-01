<?php

namespace App\Http\Controllers;

use App\Http\Requests\Moderator\UpdateModeratorRequest;
use App\Models\Moderator;
use App\Models\Student;
use App\Models\Tutor;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function moderatorUpdate(Request $request, $id)
    {
        $moderator = Moderator::with('user')->where('id', $id)->first();
        $_request = $request->validate([
            'name' => 'required',
            'email'=>'required',
            'full_name'=>'required',
            'phone'=>'required',
        ]);
        DB::beginTransaction();
        try {
                $user = User::where('id',$moderator->user_id)->first();
                $user->update([
                    'name' => $_request['name'],
                    'email' => $_request['email'],
                ]);
                $moderator->update([
                    'full_name' => $_request['full_name'],
                    'phone' => $_request['phone'],
                ]);
                DB::commit();
                return back()->with('success', 'Save success');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors( 'Save error');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function studentIndex()
    {
        $students = Student::with('user','user.membership')->paginate(15);
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
        $student = Student::with('user','user.membership')->where('id', $id)->first();
        return view('admin.user-manager.Student.edit', [
            'student' => $student
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function studentUpdate(Request $request, $id)
    {
        $student = Student::with('user')->where('id', $id)->first();
        $_request = $request->validate([
            'name' => 'required',
            'full_name'=>'required',
            'day_of_birth'=>'required',
            'phone_no'=>'required|numeric',
            'membership' => 'required|numeric',
        ]);
        DB::beginTransaction();
        try {
            $user = User::where('id',$student->user_id)->first();
            $user->update([
                'name' => $_request['name'],
                'membership_group' => $_request['membership']
            ]);
            $student->update([
                'full_name' => $_request['full_name'],
                'day_of_birth' => $_request['day_of_birth'],
                'phone_no' => $_request['phone_no'],
            ]);
            DB::commit();
            return back()->with('success', 'Save success');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors( 'Save error');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function tutorIndex()
    {
        $tutors = Tutor::with('translations','user','subject')
            ->when(request('name') != '', function (Builder $query) {
                $query->where('full_name', 'like', '%' . request('name') . '%');
            })
            ->where('id', '!=', 1)
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
    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function tutorUpdate(Request $request, $id)
    {
        $tutor = Tutor::with('user')->where('id', $id)->first();
        $_request = $request->validate([
            'name' => 'required',
            'email'=>'required',
            'full_name'=>'required',
            'day_of_birth'=>'required',
            'phone_no'=>'required',
        ]);
        DB::beginTransaction();
        try {
            $user = User::where('id',$tutor->user_id)->first();
            $user->update([
                'name' => $_request['name'],
                'email' => $_request['email'],
            ]);
            $tutor->update([
                'full_name' => $_request['full_name'],
                'day_of_birth' => $_request['day_of_birth'],
                'phone_no' => $_request['phone_no'],
            ]);
            DB::commit();
            return back()->with('success', 'Save success');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors( 'Save error');
        }
    }

    public function changeStatusUser($id)
    {
        $user = User::where('id', $id)->first();
        DB::beginTransaction();
        try {
            if ($user->active == 1){
                $user->active = 0;
                $user->save();
            } else{
                $user->active = 1;
                $user->save();
            }
            DB::commit();
            return back()->with('success', 'Save success');
        } catch (\Throwable $th)
        {
            DB::rollBack();
            return back()->with('error', 'Save error');
        }
    }
}
