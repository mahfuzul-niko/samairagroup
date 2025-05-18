<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentDashboard(){
        dd(auth()->user(), auth()->user()->courses);
    }
}
