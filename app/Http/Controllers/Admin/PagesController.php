<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function dashboard()
   {
     return view('backend.admin.dashboard');
   }
}
