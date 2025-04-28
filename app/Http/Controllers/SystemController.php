<?php

namespace App\Http\Controllers;

use App\Models\header;
use App\Models\System;
use Illuminate\Http\Request;
use Storage;

class SystemController extends Controller
{
    public function system()
    {
        $system = System::latest()->paginate(15);
        return view('backend.agent.system.index', compact('system'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required|string',
            'value' => 'required|string',
        ]);
    
        System::updateOrCreate(
            ['key' => $request->key],
            ['value' => $request->value] 
        );
        return redirect()->back()->with('success', 'System information saved successfully.');
    }
    
    public function storeImage(Request $request)
    {

        $request->validate([
            'key' => 'required|string|unique:systems,key',
            'value' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('value');
        $imagePath = $image->store('uploads/system', 'public'); // saves to storage/app/public/uploads/system

        System::updateOrCreate(
            ['key' => $request->key],
            ['value' => $imagePath]
        );

        return redirect()->back()->with('success', 'Image uploaded and saved successfully.');
    }

   
    public function destroy($id)
    {
        $system = System::findOrFail($id);
        $system->delete();

        return redirect()->back()->with('success', 'System information deleted successfully.');
    }
    public function destroyImage($key)
    {
        $setting = System::where('key', $key)->first();

        if ($setting) {
            if ($setting->value && Storage::exists($setting->value)) {
                Storage::delete($setting->value);
            }

            $setting->delete(); // Delete the whole row
        }

        return redirect()->back()->with('success', 'Image and key removed successfully.');
    }

    //header
    public function systemHeader()
    {
        
        return view('backend.agent.system.header');
    }
    public function systemFooter()
    {
        
        return view('backend.agent.system.footer');
    }


}
