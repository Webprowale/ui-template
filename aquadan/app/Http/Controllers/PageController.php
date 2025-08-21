<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('Home');
    }

    public function shop(){
        return view('Shop');
    }

    public function contact(){
        return view('Contact');
    }

    public function addToCart(Request $request)
{
    try {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|string',
            'description' => 'required|string'
        ]);

        $cart = session()->get('cart', []);
        $productName = $request->name;

        if(isset($cart[$productName])) {
            $cart[$productName]['quantity']++;
        } else {
            $cart[$productName] = [
                'name' => $request->name,
                'price' => $request->price,
                'image' => $request->image,
                'description' => $request->description,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);

        return response()->json([
            'success' => true,
            'message' => 'Product added to cart successfully!',
            'cartCount' => count($cart)
        ]);

    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => $e->getMessage()
        ], 500);
    }
}

    public function cart()
    {
        $cart = session()->get('cart', []);

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('cart', [
            'cart' => $cart,
            'total' => $total
        ]);
    }

    public function updateCart(Request $request)
    {
        $productId = $request->input('productId');
        $quantity = $request->input('quantity');

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $quantity;
            session()->put('cart', $cart);

            return response()->json([
                'success' => true,
                'message' => 'Cart updated successfully',
                'cartTotal' => count($cart),
                'itemTotal' => number_format($cart[$productId]['price'] * $quantity, 2)
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Product not found in cart'
        ]);
    }

    public function removeFromCart(Request $request)
    {
        $productId = $request->input('productId');

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);

            return response()->json([
                'success' => true,
                'message' => 'Item removed from cart',
                'cartTotal' => count($cart)
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Product not found in cart'
        ]);
    }

    public function checkout(){
        $cart = session()->get('cart', []);


    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }

    return view('Checkout', [
        'cart' => $cart,
        'total' => $total
    ]);


    }

    public function processCheckout(Request $request)
{

    $cart = session()->get('cart', []);
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }

    $orderData = [
        'order_number' => 'ORD-' . time(),
        'status' => 'confirmed',
        'total_amount' => $total,
        'subtotal' => $total,
        'shipping_cost' => 0,
        'tax_amount' => 0,
        'customer' => [
            'first_name' => $request->input('firstName'),
            'last_name' => $request->input('lastName'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
        ],

        'items' => $cart,
        'created_at' => now()->toDateTimeString(),
    ];

    session(['latest_order' => $orderData]);
    session()->forget('cart');
    return redirect()->route('success');
}

public function success()
{

    $order = session('latest_order');
    if (!$order) {
        return redirect()->url('/');
    }

    return view('Success', compact('order'));
}

}
