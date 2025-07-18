<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\emergingProduct;
use App\Models\medicaProduct;
use App\Models\Property;
use App\Models\SamairaGroup;
use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function dashboard()
  {
    $groups = SamairaGroup::all();
    $ssdi_count = Course::where('course_for', 'ssdi')->count();
    $langauge_count = Course::where('course_for', 'language')->count();
    $property_count = Property::count();
    $medica_count = medicaProduct::count();
    $emerging_count = emergingProduct::count();
    return view('backend.admin.dashboard', compact('groups', 'ssdi_count', 'langauge_count','property_count','medica_count','emerging_count'));
  }
}
