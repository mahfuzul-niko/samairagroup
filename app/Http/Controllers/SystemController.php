<?php

namespace App\Http\Controllers;

use App\Models\concernContent;
use App\Models\FooterConcern;
use App\Models\FooterLink;
use App\Models\header;
use App\Models\NewsLetter;
use App\Models\Role;
use App\Models\System;
use App\Models\UsefullLink;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
            'value' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image = $request->file('value');
        $imagePath = $image->store('uploads/system', 'public'); // storage/app/public/uploads/system

        System::updateOrCreate(
            ['key' => $request->key], // Search by key
            ['value' => $imagePath]   // Update or insert value
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
        $footerconcerns = FooterConcern::orderBy('order')->get();
        $footerlinks = FooterLink::orderBy('order')->get();
        return view('backend.agent.system.footer', compact('footerconcerns', 'footerlinks'));
    }

    public function storeFooterConcern(Request $request)
    {
        $request->validate([
            'key' => 'required|string',
            'value' => 'required|string',
            'order' => 'required|integer',
        ]);
        $data = new FooterConcern;
        $data->key = $request->key;
        $data->value = $request->value;
        $data->order = $request->order;
        $data->save();
        return redirect()->back()->with('success', 'Footer Concern information saved successfully.');
    }
    public function destroyFooterConcern($id)
    {
        $footer = FooterConcern::findOrFail($id);
        $footer->delete();

        return redirect()->back()->with('success', 'Footer Concern information deleted successfully.');
    }

    public function storeFooterLink(Request $request)
    {
        $request->validate([
            'key' => 'required|string',
            'value' => 'required|string',
            'order' => 'required|integer',
        ]);
        $data = new FooterLink;
        $data->key = $request->key;
        $data->value = $request->value;
        $data->order = $request->order;
        $data->save();
        return redirect()->back()->with('success', 'Footer Link information saved successfully.');
    }
    public function destroyFooterLink($id)
    {
        $footer = FooterLink::findOrFail($id);
        $footer->delete();

        return redirect()->back()->with('success', 'Footer Link information deleted successfully.');
    }



    public function systemRole()
    {
        $roles = Role::all();
        return view('backend.agent.system.role', compact('roles'));
    }
    public function storeRole(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);
        $data = new Role;
        $data->name = $request->name;
        $data->save();
        return redirect()->back()->with('success', 'Role information saved successfully.');
    }
    public function updateRole(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'status' => 'required|in:active,inactive',
        ]);
        $data = Role::findOrFail($id);
        $data->name = $request->name;
        $data->status = $request->status;
        $data->save();
        return redirect()->back()->with('success', 'Role information updated successfully.');
    }
    public function destroyRole($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->back()->with('success', 'Role information deleted successfully.');
    }

    public function systemMember()
    {
        $members = User::latest()->get();
        $roles = Role::latest()->get();

        return view('backend.agent.system.member', compact('members', 'roles'));
    }
    public function storeMember(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed', // `confirmed` checks password_confirmation
            'role' => 'required|exists:roles,id',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'username' => str_replace(' ', '_', $validated['name']),
            'password' => Hash::make($validated['password']),
            'role_id' => $validated['role'],
        ]);

        return redirect()->back()->with('success', 'User created successfully.');
    }
    public function updateMemberRole(Request $request, User $member)
    {
        $member->role_id = $request->role;
        $member->save();
        return redirect()->back()->with('success', 'User role updated successfully.');
    }
    public function destroyMember($id)
    {
        $member = User::findOrFail($id);
        $member->delete();

        return redirect()->back()->with('success', 'Member information deleted successfully.');
    }

    public function storeNewsLetter(Request $request)
    {
        $email = new NewsLetter;
        $email->key = $request->key;
        $email->email = $request->email;
        $email->save();
        return redirect()->back()->with('success', 'Subscribe to newsletter successfully.');
    }
    public function systemNewsLetter()
    {

        $groups = NewsLetter::where('key', 'group')->paginate(20);
        $jobs = NewsLetter::where('key', 'job')->paginate(20);
        return view('backend.agent.system.news-letter', compact('groups', 'jobs'));
    }

    public function storeOrUpdateConcernContent(Request $request)
    {

        concernContent::updateOrCreate(
            ['key' => $request->key],
            [
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'map' => $request->map,
                'office' => $request->office,
                'whatsapp' => $request->whatsapp,
                'twitter' => $request->twitter,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'pinterst' => $request->pinterst,
                'youtube' => $request->youtube,
                'linkedin' => $request->linkedin,
            ]
        );

        return back()->with('success', 'Content saved successfully.');
    }
    




}
