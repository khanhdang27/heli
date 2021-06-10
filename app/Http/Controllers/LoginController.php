<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function actionLogin(AdminLoginRequest $request)
    {
        if(Auth::attempt($request->validated())) {
            return redirect()->route('admin.dashboard')->with('status', 'login successful!');
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
    
    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');;
    }
}
