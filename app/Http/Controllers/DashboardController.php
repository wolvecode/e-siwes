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
//       flashStatus('It does not work anymore, please try again.', 'Failed', 'error');
        return view('dashboard.dashboard');
    }
}
