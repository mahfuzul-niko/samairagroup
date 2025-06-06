<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'method' => 'required',
        ]);

        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return back()->with('error', 'Your cart is empty.');
        }

        DB::beginTransaction();


        // Calculate total
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        // Create Order
        $order = Order::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'landmark' => $request->landmark,
            'postal_code' => $request->postal_code,
            'method' => $request->method,
            'total' => $total,
        ]);

        // Attach products to order
        foreach ($cart as $variantKey => $item) {
            $order->products()->attach($item['product_id'], [
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'weight' => $item['weight'] ?? null,
                'size' => $item['size'] ?? null,
            ]);
        }


        DB::commit();

        session()->forget('cart');

        return back()->with('success', 'Order placed successfully!');

    }

}
