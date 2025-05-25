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

        $banners = Banner::latest()->where('key', 'jphomes')->get();
        return view('backend.agent.sisters.property.jphomes', compact('banners'));
    }

    //category
    public function category()
    {
        $categories = PropertyCategory::latest()->get();
        return view('backend.agent.sisters.property.category', compact('categories'));
    }
    public function storePropertyCategory(Request $request)
    {
        $category = new PropertyCategory;
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        if ($request->hasFile('image')) {
            $category->image = $request->file('image')->store('categories', 'public');
        } else {
            $category->image = null;
        }
        $category->save();
        return redirect()->back()->with('success', 'Property category created successfully.');
    }
    public function updatePropertyCategory(Request $request, PropertyCategory $category)
    {
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        if ($request->hasFile('image')) {
            if ($category->image && \Storage::disk('public')->exists($category->image)) {
                \Storage::disk('public')->delete($category->image);
            }
            $category->image = $request->file('image')->store('properties', 'public');
        }
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
        if ($request->hasFile('image')) {
            $property->image = $request->file('image')->store('properties', 'public');
        } else {
            $property->image = null;
        }
        $property->description = $request->description;
        $property->save();
        return redirect()->back()->with('success', 'Property created successfully.');
    }
    //property
    public function properties()
    {
        $properties = Property::latest()->paginate(20);
        return view('backend.agent.sisters.property.properties', compact('properties'));
    }
    public function createProperty()
    {
        $categories = PropertyCategory::latest()->get();
        return view('backend.agent.sisters.property.create', compact('categories'));
    }
    public function editProperty(Property $property)
    {
        $categories = PropertyCategory::latest()->get();
        return view('backend.agent.sisters.property.edit', compact('property', 'categories'));
    }
    public function updateProperty(Request $request, Property $property)
    {
        $property->title = $request->title;
        $property->slug = Str::slug($request->title);
        $property->category_id = $request->category_id;
        $property->price = $request->price;
        $property->address = $request->address;
        $property->bath = $request->bath;
        $property->bed = $request->bed;
        $property->area = $request->area;
        if ($request->hasFile('image')) {
            if ($property->image && \Storage::disk('public')->exists($property->image)) {
                \Storage::disk('public')->delete($property->image);
            }
            $property->image = $request->file('image')->store('properties', 'public');
        }
        $property->description = $request->description;
        $property->save();
        return redirect(route('agent.jphomes.properties'))->with('success', 'Property updated successfully.');
    }
    public function deleteProperty(Property $property)
    {
        if ($property->image && \Storage::disk('public')->exists($property->image)) {
            \Storage::disk('public')->delete($property->image);
        }
        $property->delete();
        return redirect()->back()->with('success', 'Property deleted successfully.');
    }

}
