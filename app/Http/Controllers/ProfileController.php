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

        return view('profile.profile');
    }

}
