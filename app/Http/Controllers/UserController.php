<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.global');
    }

    public function index()
    {
        return view('addUser');
    }

    public function showLecturer()
    {
        return view('addLecturer');
    }

    public function addLecturer(Request $request)
    {
        $data = $request->validate([
            'name'=> 'required|max:255',
//            'role' => 'required',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']);
        $data['role'] = 3;
        // store user
        $user =  User::create($data);

        return back()->with('status', 'User successfully created');
    }


    public function create(Request $request)
    {
        $data = $request->validate([
            'name'=> 'required|max:255',
            'role' => 'required',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']);
        // store user
        $user =  User::create($data);

        return back()->with('status', 'User successfully created');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(User $user)
    {
        //
    }


    public function edit(User $user)
    {
        //
    }


    public function update(Request $request, User $user)
    {
        //
    }


    public function destroy(User $user)
    {
        //
    }
}
