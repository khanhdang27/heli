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
//        if (Hash::check('plain-text', Auth::)) {
//            // The passwords match...
//        }

        $request ->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);
        User::find(Auth::user()->id)
            ->update(['password'=> $request->password]);
    }

}