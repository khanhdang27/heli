<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function actionLogin(AdminLoginRequest $request)
    {
        if(Auth::attempt($request->validated())) {
            
            if (Auth::user()->isSuperAdmin() || \Auth::user()->isAdmin()) {
                return redirect()->route('admin.dashboard')->with('status', 'Login successful!');
            } else {
                return redirect()->route('site.home')->with('status', 'Login successful!');
            }
        }
        throw ValidationException::withMessages([
            'email' => 'Email or Password is incorrect',
            'password' => 'Email or Password is incorrect'
        ]);
    }


    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
