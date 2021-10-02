<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ResetPasswordController extends Controller
{
    public function index($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        if($status === Password::PASSWORD_RESET)
        {
            flashStatus($status, 'Success');
            return redirect()->route('login');
        }

        flashStatus($status, 'Error', 'Danger');
        return back();
//    ->withErrors(['email' => [__($status)]]);
    }
}

