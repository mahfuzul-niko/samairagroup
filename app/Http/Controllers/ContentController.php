<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutBanner;
use App\Models\Contact;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use App\Models\ContactSubject;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function storeAboutBanner(Request $request)
    {
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('banners', 'public');
        }

        $banner = new AboutBanner;

        $banner->key = $request->key;

        if (isset($data['image'])) {
            $banner->image = $data['image'];
        }

        $banner->save();

        return redirect()->back()->with('success', 'About banner saved successfully.');
    }
    public function deleteAboutBanner(AboutBanner $banner)
    {

        if ($banner->image && \Storage::disk('public')->exists($banner->image)) {
            \Storage::disk('public')->delete($banner->image);
        }

        $banner->delete();

        return redirect()->back()->with('success', 'About banner deleted successfully.');
    }
    public function storeAbout(Request $request)
    {
        $about = new About;
        $about->key = $request->key;

        $about->name = $request->name;
        $about->title = $request->title;
        $about->description = $request->description;
        $about->save();
        return redirect()->back()->with('success', 'About saved successfully.');
    }
    public function updateAbout(Request $request, About $about)
    {
        $about->key = $request->key;
        $about->name = $request->name;
        $about->description = $request->description;
        $about->save();

        return redirect()->back()->with('success', 'About updated successfully.');
    }
    public function deleteAbout(About $about)
    {
        $about->delete();
        return redirect()->back()->with('success', 'About deleted successfully.');
    }

    //contact 
    public function storeContactBanner(Request $request)
    {
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('banners', 'public');
        }

        $banner = new ContactBanner;

        $banner->key = $request->key;

        if (isset($data['image'])) {
            $banner->image = $data['image'];
        }

        $banner->save();

        return redirect()->back()->with('success', 'Contact banner saved successfully.');
    }
    public function deleteContactBanner(ContactBanner $banner)
    {

        if ($banner->image && \Storage::disk('public')->exists($banner->image)) {
            \Storage::disk('public')->delete($banner->image);
        }

        $banner->delete();

        return redirect()->back()->with('success', 'Contact banner deleted successfully.');
    }
    public function saveContactInfo(Request $request)
    {
        $phones = array_map('trim', explode(',', $request->phone)); // Trim spaces

        ContactInfo::updateOrCreate(
            ['key' => $request->key], // Search by unique key
            [
                'reach_mail' => $request->reach_mail,
                'careers_mail' => $request->careers_mail,
                'phone' => json_encode($phones),
                'address_title' => $request->address_title,
                'address' => $request->address,
            ]
        );

        return redirect()->back()->with('success', 'Contact Info saved successfully.');
    }


    public function storeContactSubject(Request $request)
    {
        $subject = new ContactSubject;
        $subject->contact_info_id = $request->info_id;
        $subject->subject = $request->subject;
        $subject->save();
        return redirect()->back()->with('success', 'Contact Subject Added successfully.');
    }
    public function deleteContactSubject(ContactSubject $subject)
    {
        $subject->delete();
        return redirect()->back()->with('success', 'Contact Subject deleted successfully.');
    }



    //front contact
    public function storeContact(Request $request)
    {
        $contact = new Contact;
        $contact->key = $request->key;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }

    public function viewContact($key){
        $contacts = Contact::latest()->where('key', $key)->get();
        return view('backend.agent.content.contact',compact('contacts'));
    }



}
