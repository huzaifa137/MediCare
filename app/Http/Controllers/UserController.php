<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userDashboard()
    {
        return view('dashboard');
    }

    public function userProfile()
    {
        return view('user.profile');
    }

    public function userLogin()
    {
        return view('user.login');
    }
}
