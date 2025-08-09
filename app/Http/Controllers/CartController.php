<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        
        $productId = $request->product_id;
        $productName = $request->product_name;
        $productPrice = $request->price;
        $productImage = $request->image;
        $productWeight = $request->weight;
        $productSize = $request->size;
        $productDelivery = $request->delivery ; 
        $productQuantity = $request->quantity ?? 1; // default to 1 if not sent

        $variantKey = $productId . '_' . $productWeight . '_' . $productSize;

        $cart = session()->get('cart', []);

        if (isset($cart[$variantKey])) {
            $cart[$variantKey]['quantity'] += $productQuantity;
        } else {
            $cart[$variantKey] = [
                'product_id' => $productId,
                'name' => $productName,
                'price' => $productPrice,
                'image' => $productImage,
                'quantity' => $productQuantity,
                'weight' => $productWeight,
                'size' => $productSize,
                'delivery' => $productDelivery,
            ];
        }

        session()->put('cart', $cart);


        return back()->with('success', 'Product added to cart!');
    }
    public function remove(Request $request)
    {
        $productId = $request->input('id');

        $cart = session()->get('cart', []);
        unset($cart[$productId]);

        session()->put('cart', $cart);

        return back()->with('success', 'Product removed!');
    }
}
