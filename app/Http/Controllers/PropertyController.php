<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Property;
use App\Models\PropertyCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class PropertyController extends Controller
{
    public function Property()
    {
        $categories = PropertyCategory::latest()->get();
        $banners = Banner::latest()->where('key', 'jphomes')->get();
        return view('backend.agent.sisters.property.jphomes', compact('banners', 'categories'));
    }
    public function storePropertyCategory(Request $request)
    {
        $category = new PropertyCategory;
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        $category->save();
        return redirect()->back()->with('success', 'Property category created successfully.');
    }
    public function updatePropertyCategory(Request $request, PropertyCategory $category)
    {
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        $category->save();
        return redirect()->back()->with('success', 'Property category updated successfully.');
    }
    public function deletePropertyCategory(PropertyCategory $category)
    {
        $category->delete();
        return redirect()->back()->with('success', 'Property category deleted successfully.');
    }
    public function storeProperty(Request $request)
    {
        $property = new Property;
        $property->title = $request->title;
        $property->slug = Str::slug($request->title);
        $property->category_id = $request->category_id;
        $property->price = $request->price;
        $property->address = $request->address;
        $property->bath = $request->bath;
        $property->bed = $request->bed;
        $property->area = $request->area;
        $property->save();
        return redirect()->back()->with('success', 'Property created successfully.');
    }


}
