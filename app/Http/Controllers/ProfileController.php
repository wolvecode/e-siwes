<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth.global');
    }

    public function show()
    {
        if(auth('user')){
            $user = auth('user')->user();
            return view('profile.profile', ['user' => $user]);
        }
        if(auth('student')){
            $user = auth('student')->user();
            return view('profile.profile',  ['user' => $user]);
        }
        return back();
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name',
            'matric_no' => 'required|unique:students|max:255',
            'session_id' => 'required',
            'password' => 'required|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']);

        Student::create($data);

        flashStatus('User successfully created', 'Success');

        return back();
    }

}
