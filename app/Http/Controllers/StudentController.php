<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentDashboard()
    {
        dd(auth()->user(), auth()->user()->courses);
    }
    public function studentLogin()
    {
        return view('frontend.content.login');
    }
    public function studentRegister()
    {
        return view('frontend.content.register');
    }

}
