<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ChangePasswordController extends Controller
{
    public function update(Request $request){

        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::user()->id);
        $user->forceFill([
            'password' => Hash::make($request->input('password'))
        ])->setRememberToken(Str::random(60));


    }

}
