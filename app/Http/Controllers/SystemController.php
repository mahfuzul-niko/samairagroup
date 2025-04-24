<?php

namespace App\Http\Controllers;

use App\Models\header;
use App\Models\System;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function system()
    {
        return view('backend.agent.system.index');
    }
    public function systemStore(Request $request)
    {
        $request->validate([
            'key' => 'required|string|unique:headers,key',
            'value' => 'required|string',
        ]);

        System::create([
            'key' => $request->key,
            'value' => $request->value,
        ]);


        return redirect()->back()->with('success', 'System information saved successfully.');
    }
}
