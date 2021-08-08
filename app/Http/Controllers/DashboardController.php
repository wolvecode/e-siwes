<?php

namespace App\Http\Controllers;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.global');
    }

    public function index()
    {
        return view('dashboard.dashboard');
    }
}
