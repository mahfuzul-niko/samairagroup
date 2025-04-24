<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function samairagrop(){
        return view('frontend.samairagroup.index');
   }
   public function samairaskills(){
        return view('frontend.samairaskills.index');
   }
   public function samairaskillsJapan(){
        return view('frontend.samairaskillsjapan.index');
   }
}
