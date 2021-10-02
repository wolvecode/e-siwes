<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    //view user login
    public function index()
    {
        return view('auth.forgot-password');
    }

    public function resetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if($status === Password::RESET_LINK_SENT)
        {
            flashStatus(__($status), 'Success');
            return back();
        }

        flashStatus(['email' => __($status)], 'Error', 'Danger');
        return back();

//    return $status === Password::RESET_LINK_SENT
//        ? back()->with(['status' => __($status)])
//        : back()->withErrors(['email' => __($status)]);
    }

    public function passwordReset($token)
    {
        return view('auth.reset-password', ['token' => $token]);
   }

}
