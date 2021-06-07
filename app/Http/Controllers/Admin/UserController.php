<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Models\UserRole;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        // $userRoles = DB::table('roles')
        //     ->join('role_users', 'roles.id', '=', 'role_users.role_id')
        //     ->join('users', 'users.id', '=', 'role_users.user_id')
        //     ->where('role_id', '=', '2')
        //     ->paginate(20);

        // $member = User::with('role')->where(['role_id'=> Role::$MEMBER_TYPE]);
        // return view('admin.user.index', [
        //     'userRoles' => $member
        // ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateUserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateUserRequest $request)
    {
        // $user = new User(
        //     $request->validated()
        // );
        // $user->save();
        // $userRole = new UserRole(['user_id' => $user->id, 'role_id' => '2']);
        // $userRole->save();
        // return back()->with('success', 'Delete success');
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * @param User $user
     * @return View
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', [
            'user' => $user
        ]);
    }

    /**
     * @param CreateUserRequest $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CreateUserRequest $request, User $user)
    {
        $user->update(
            $request->validated()
        );
        $user->save();
        return back()->with('success', 'Update success!');
    }


    public function destroy(User $user)
    {
        try {
            $user->delete();
            return response([
                'message' => 'Delete success!'
            ]);
        } catch (\Exception $exception) {
            return response([
                'message' => 'Cannot delete course'
            ], 400);
        }
    }
}
