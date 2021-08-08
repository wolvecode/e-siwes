<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{

    public function index()
    {
        return view('addStudent');
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=> 'required|max:255',
            'matric_no' => 'required|unique:students',
            'password' => 'required|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']);
        // store user
        $user =  Student::create($data);

        return back()->with('status', 'User successfully created');
    }


    public function show(Student $student)
    {
        //
    }


    public function edit(Student $student)
    {
        //
    }


    public function update(Request $request, Student $student)
    {
        //
    }


    public function destroy(Student $student)
    {
        //
    }
}
