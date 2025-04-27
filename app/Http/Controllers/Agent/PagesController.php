<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('backend.agent.dashboard');
    }
    public function profile()
    {

        return view('backend.profile.profile');
    }
}
