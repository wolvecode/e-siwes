<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.global');
    }

    public function showAdmin()
    {
        $admin = User::where('role', 2)->paginate(10);
        return view('admin.list-admin', ['users' => $admin]);
    }

    public function listLecturer()
    {
        $lecturer = User::where('role', 3)->paginate(10);
        return view('admin.list-lecturer', ['users' => $lecturer]);
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
            'name' => 'required|max:255',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']);
        $data['role'] = 3;
        // store user
        $user =  User::create($data);

        flashStatus('User successfully created', 'Success');
        return back();
    }


    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'role' => 'required',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']);
        // store user
        $user =  User::create($data);

        flashStatus('User successfully created', 'Success');
        return back();
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
        $data = $request->validate([
            'name' => 'required|max:255',
            'role' => 'required',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']);
        // store user
        User::where($user->id)->update($data);

        flashStatus('User eddited', 'Success');
        return back();
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
