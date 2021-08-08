<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //Redirect to dashboard if user is already login
    public function __construct()
    {
        $this->middleware(['guest:user', 'guest:student']);
    }

    //view user login
    public function index()
    {
        return view('auth.login');
    }

    //log user in
    public function  store(Request  $request)
    {
        //validate user
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        //sign user in

        if(auth('user')->attempt($credentials))
        {
            return redirect()->route('dashboard');
        }

        if (auth('student')->attempt($credentials))
        {
            return redirect()->route('dashboard');
        }

        return back()->with('status', 'Invalid login details');
    }

}
