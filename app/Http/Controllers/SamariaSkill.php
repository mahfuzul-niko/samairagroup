<?php

namespace App\Http\Controllers;

use App\Models\SkillAdvertise;
use App\Models\SkillCertified;
use Illuminate\Http\Request;
use Storage;

class SamariaSkill extends Controller
{
    public function samairaSkill()
    {
        $certifieds = SkillCertified::latest()->get();
        $advertise = SkillAdvertise::latest()->first();
        // dd($advertise);
        return view('backend.agent.sisters.skill.skill', compact('certifieds', 'advertise'));
    }

    //skills

    public function storeCertified(Request $request)
    {

        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'logo' => 'required|image|mimes:jpg,jpeg,png,gif',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('certified', 'public');
        }

        SkillCertified::create($data);

        return redirect()->back()->with('success', 'Certified created successfully.');
    }

    public function updateCertified(Request $request, SkillCertified $certified)
    {
        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif',
        ]);

        if ($request->hasFile('logo')) {

            if ($certified->logo && Storage::disk('public')->exists($certified->logo)) {
                Storage::disk('public')->delete($certified->logo);
            }
            $data['logo'] = $request->file('logo')->store('certified', 'public');
        }

        $certified->update($data);

        return redirect()->back()->with('success', 'Certified updated successfully.');
    }

    public function destroyCertified(SkillCertified $certified)
    {

        if ($certified->logo && Storage::disk('public')->exists($certified->logo)) {
            Storage::disk('public')->delete($certified->logo);
        }

        $certified->delete();

        return redirect()->back()->with('success', 'Certified deleted successfully.');
    }
    public function storeAdvertise(Request $request)
    {
        $data = $request->validate([
            'id' => 'nullable|exists:skill_advertises,id',
            'image' => 'nullable|image',
            'description' => 'nullable|max:255',
            'link' => 'nullable|string|max:255',
            'price' => 'nullable|string|max:255',
        ]);

        // Fetch existing record by id
        $existing = isset($data['id'])
            ? SkillAdvertise::find($data['id'])
            : null;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('advertise', 'public');
        } else {
            $data['image'] = $existing->image ?? null;
        }

        SkillAdvertise::updateOrCreate(
            ['id' => $data['id'] ?? null],
            [
                'image' => $data['image'],
                'description' => $data['description'],
                'link' => $data['link'],
                'price' => $data['price'],
            ]
        );
        return redirect()->back()->with('success', 'Advertisement saved successfully.');
    }






}
