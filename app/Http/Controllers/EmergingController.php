<?php

namespace App\Http\Controllers;

use App\Models\concernContent;
use App\Models\emergingCategory;
use App\Models\emergingImages;
use App\Models\emergingOrder;
use App\Models\emergingPartner;
use App\Models\emergingProduct;
use App\Models\emergingReview;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use App\Models\About;
use App\Models\AboutBanner;
use App\Models\Banner;
use Storage;
class EmergingController extends Controller
{
    public function emerging()
    {
        $partners = emergingPartner::latest()->get();

        $banners = Banner::latest()->where('key', 'emerging')->get();
        $aboutbanners = AboutBanner::latest()->where('key', 'emerging')->get();
        $about = About::latest()->where('key', 'emerging')->first();
        $contactbanners = ContactBanner::latest()->where('key', 'emerging')->get();
        $info = ContactInfo::latest()->where('key', 'emerging')->first();
        $content = concernContent::latest()->where('key', 'emerging')->first();

        return view('backend.agent.sisters.emerging.emerging', compact('banners', 'about', 'contactbanners', 'info', 'aboutbanners', 'partners', 'content'));
    }

    public function categories()
    {
        $categories = emergingCategory::latest()->get();
        return view('backend.agent.sisters.emerging.categories', compact('categories'));

    }
    public function storeCategory(Request $request)
    {
        $category = new emergingCategory;
        if ($request->hasFile('icon')) {
            $category->icon = $request->file('icon')->store('category', 'public');
        } else {
            $category->icon = null;
        }
        $category->title = $request->title;
        $category->save();
        return back()->with('success', 'Category created successfully.');
    }
    public function updateCategory(emergingCategory $category, Request $request)
    {
        if ($request->hasFile('icon')) {
            if ($category->icon && Storage::disk('public')->exists($category->icon)) {
                Storage::disk('public')->delete($category->icon);
            }
            $category->icon = $request->file('icon')->store('category', 'public');
        }
        $category->title = $request->title;
        $category->save();
        return back()->with('success', 'Category updated successfully.');
    }
    public function deleteCategory(emergingCategory $category)
    {
        $category->delete();
        return back()->with('success', 'Updated deleted successfully.');
    }

    //product 
    public function products()
    {
        $products = emergingProduct::latest()->paginate(20);

        return view('backend.agent.sisters.emerging.products', compact('products'));
    }
    public function productCreate()
    {
        $categories = emergingCategory::latest()->get();
        return view('backend.agent.sisters.emerging.create', compact('categories'));
    }
    public function productEdit(emergingProduct $product)
    {

        $categories = emergingCategory::latest()->get();

        return view('backend.agent.sisters.emerging.edit', compact('categories', 'product'));
    }

    public function storeProduct(Request $request)
    {


        $product = new emergingProduct;
        $imagePath = $request->file('image')->store('products', 'public');
        $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->descount_price = $request->descount_price;
        $product->weight = $request->weight
            ? json_encode(array_map('trim', explode(',', $request->weight)))
            : null;

        $product->size = $request->size
            ? json_encode(array_map('trim', explode(',', $request->size)))
            : null;


        $product->description = $request->description;
        $product->phone = $request->phone;
        $product->image = $imagePath;
        $product->save();

        return redirect()->back()->with('success', 'Product Created successfully.');
    }
    public function updateProduct(Request $request, emergingProduct $product)
    {
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

        $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->descount_price = $request->descount_price;
        $product->weight = $request->weight
            ? json_encode(array_map('trim', explode(',', $request->weight)))
            : null;

        $product->size = $request->size
            ? json_encode(array_map('trim', explode(',', $request->size)))
            : null;


        $product->description = $request->description;
        $product->phone = $request->phone;
        $product->save();

        return redirect()->back()->with('success', 'Product Updated successfully.');
    }
    public function deleteProduct(emergingProduct $product)
    {
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();
        return redirect()->back()->with('success', 'Product deleted successfully.');
    }

    public function storeImages(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:emerging_products,id',
        ]);

        if ($request->hasFile('multi_images')) {
            foreach ($request->file('multi_images') as $image) {
                $path = $image->store('product_id', 'public');

                emergingImages::create([
                    'product_id' => $request->product_id,
                    'image' => $path,
                ]);
            }
        }

        return back()->with('success', 'Images uploaded successfully.');
    }
    public function deleteImage($id)
    {
        $image = emergingImages::findOrFail($id);

        // Delete the file from storage
        Storage::disk('public')->delete($image->image);

        // Delete the database record
        $image->delete();

        return back()->with('success', 'Image deleted successfully.');
    }
    //review
    public function reviews(emergingReview $reviews)
    {
        $reviews = emergingReview::latest()->get();
        return view('backend.agent.sisters.emerging.review', compact('reviews'));
    }
    public function storeReview(Request $request)
    {
        $review = new emergingReview;
        $review->name = $request->name;
        $review->subtitle = $request->subtitle;
        $review->description = $request->description;
        if ($request->hasFile('image')) {
            $review->image = $request->file('image')->store('reviews', 'public');
        } else {
            $review->image = null;
        }
        $review->save();
        return redirect()->back()->with('success', 'Review created successfully.');
    }
    public function updateReview(emergingReview $review, Request $request)
    {

        $review->name = $request->name;
        $review->subtitle = $request->subtitle;
        $review->description = $request->description;
        if ($request->hasFile('image')) {
            if ($review->image && Storage::disk('public')->exists($review->image)) {
                Storage::disk('public')->delete($review->image);
            }
            $review->image = $request->file('image')->store('reviews', 'public');
        }
        $review->save();
        return redirect()->back()->with('success', 'Review update successfully.');
    }
    public function deleteReview(emergingReview $review)
    {
        if ($review->image && Storage::disk('public')->exists($review->image)) {
            Storage::disk('public')->delete($review->image);
        }

        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
    // partner
    public function storePartner(Request $request)
    {

        $partner = new emergingPartner;
        $partner->title = $request->title;
        if ($request->hasFile('image')) {
            $partner->image = $request->file('image')->store('partner', 'public');
        } else {
            $partner->image = null;
        }
        $partner->save();
        return redirect()->back()->with('success', 'Partner created successfully.');
    }

    public function deletePartner(emergingPartner $partner)
    {
        if ($partner->image && Storage::disk('public')->exists($partner->image)) {
            Storage::disk('public')->delete($partner->image);
        }

        $partner->delete();

        return redirect()->back()->with('success', 'partner deleted successfully.');
    }
    //order

    public function orders()
    {
        $orders = emergingOrder::latest()->paginate(20);
        return view('backend.agent.sisters.emerging.orders', compact('orders'));
    }
    public function order(emergingOrder $order)
    {
        return view('backend.agent.sisters.emerging.order', compact('order'));
    }
    public function updateMark(Request $request, Order $order)
    {
        $order->mark = $request->has('mark') ? 1 : 0;
        $order->save();
        $message = $order->mark ? 'Order approved successfully.' : 'Order approval removed.';
        return redirect()->back()->with('success', $message);
    }
    public function bestSelling(Request $request, emergingProduct $product)
    {
        $product->best = $request->has('best') ? 1 : 0;
        $product->save();
        $message = $product->best ? 'Product featured successfully.' : 'Product featured removed.';
        return redirect()->back()->with('success', $message);
    }
    public function hotSelling(Request $request, emergingProduct $product)
    {
        $product->hot = $request->has('hot') ? 1 : 0;
        $product->save();
        $message = $product->hot ? 'Product featured successfully.' : 'Product featured removed.';
        return redirect()->back()->with('success', $message);
    }
}
