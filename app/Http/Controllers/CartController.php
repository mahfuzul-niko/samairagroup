<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $productId = $request->product_id;
        $productPrice = $request->price;
        $productWeight = $request->weight;
        $productSize = $request->size;

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                'price' => $productPrice,
                'quantity' => 1,
                'weight' => $productWeight,
                'size' => $productSize,
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
