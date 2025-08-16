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
        'message' => 'Product added to cart!',
        'cartCount' => count($cart)
    ]);
}
    public function cart(){
        $cart = session()->get('cart', []);


    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }

    return view('Cart', [
        'cart' => $cart,
        'total' => $total
    ]);
    }






}
