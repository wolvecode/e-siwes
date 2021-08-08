<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public  function logout()
    {
        auth('user')->logout();
        auth('student')->logout();

        return redirect()->route('login');
    }
}
