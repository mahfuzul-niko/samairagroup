<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutBanner;
use App\Models\Banner;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use App\Models\ContactSubject;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Storage;

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

    public function viewContact($key)
    {
        $contacts = Contact::latest()->where('key', $key)->paginate(10);
        return view('backend.agent.content.contact', compact('contacts'));
    }
    public function deleteContact(Contact $contact)
    {
        $contact->delete();
        return redirect()->back()->with('success', 'Contact deleted successfully.');
    }
    //review

    public function review()
    {
        $reviews = Review::latest()->get();
        $courses = Course::latest()->get();
        return view('backend.agent.content.reviews', compact('reviews', 'courses'));
    }
    public function storeReview(Request $request)
    {
        $review = new Review;
        $review->name = $request->name;
        $review->course_id = $request->course_id;
        $review->review = $request->review;

        if ($request->hasFile('image')) {
            $review->image = $request->file('image')->store('review', 'public');
        }

        $review->save();
        return redirect()->back()->with('success', 'Review added successfully.');
    }
    public function updateReview(Request $request, Review $review)
    {
        $review->name = $request->name;
        $review->course_id = $request->course_id;
        $review->review = $request->review;

        if ($request->hasFile('image')) {
            $review->image = $request->file('image')->store('review', 'public');
        }

        $review->save();

        return redirect()->back()->with('success', 'Review updated successfully.');
    }
    public function deleteReview(Review $review)
    {

        if ($review->image && Storage::disk('public')->exists($review->image)) {
            Storage::disk('public')->delete($review->image);
        }

        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
    public function updateMarkReview(Request $request, Review $review)
    {
        $review->mark = $request->has('mark') ? 1 : 0;
        $review->save();
        $message = $review->review ? 'Review approved successfully.' : 'Review approval removed.';
        return redirect()->back()->with('success', $message);
    }

    //certificates
    public function certificate()
    {
        $certificates = Certificate::latest()->get();
        $enrolls = Enroll::where('mark', true)->latest()->get();
        
        
        return view('backend.agent.content.certificate', compact('certificates', 'enrolls'));
    }
    public function storeCertificate(Request $request)
    {
        $enroll = Enroll::find($request->enroll_id);
        $user = User::where('email', $enroll->email)->first();
        $certificate = new Certificate;
        $certificate->enroll_id = $request->enroll_id;
        $certificate->user_id = $user->id;
        $certificate->name = $request->name;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('certificate/files', 'public');
            $certificate->file = $filePath;
        }
        $certificate->save();
        return redirect()->back()->with('success', 'Certificate added successfully.');
    }

    public function deleteCertificate(Certificate $certificate)
    {
        if ($certificate->file && Storage::exists($certificate->file)) {
            Storage::delete($certificate->file);
        }
        $certificate->delete();

        return redirect()->back()->with('success', 'Certificate deleted successfully.');
    }
    public function storebanner(Request $request)
    {
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('banners', 'public');
        }

        $banner = new Banner;
        if ($request->has('title')) {
            $banner->title = $request->title;
        }
        if ($request->has('subtitle')) {
            $banner->subtitle = $request->subtitle;
        }
        if ($request->has('url')) {
            $banner->url = $request->url;
        }
        $banner->key = $request->key;

        if (isset($data['image'])) {
            $banner->image = $data['image'];
        }

        $banner->save();

        return redirect()->back()->with('success', 'Banner saved successfully.');
    }
    public function updateBanner(Request $request, Banner $banner)
    {
        if ($request->hasFile('image')) {
            if ($banner->image && Storage::disk('public')->exists($banner->image)) {
                Storage::disk('public')->delete($banner->image);
            }
            $banner->image = $request->file('image')->store('banners', 'public');
        }

        if ($request->has('title')) {
            $banner->title = $request->title;
        }
        if ($request->has('subtitle')) {
            $banner->subtitle = $request->subtitle;
        }
        if ($request->has('url')) {
            $banner->url = $request->url;
        }

        $banner->key = $request->key;

        $banner->save();

        return redirect()->back()->with('success', 'Banner updated successfully.');
    }
    public function deleteBanner(Banner $banner)
    {
        if ($banner->image && Storage::disk('public')->exists($banner->image)) {
            Storage::disk('public')->delete($banner->image);
        }

        $banner->delete();

        return redirect()->back()->with('success', 'Banner deleted successfully.');
    }

}
