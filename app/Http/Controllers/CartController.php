<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{

public function index()
{
    // Fetch the currently logged-in user's wishlist items
    $user = auth()->user(); // Get the currently authenticated user
    $cart = Cart::where('user_id', $user->id)
        ->with('product') // Assuming you have defined a 'product' relationship in the Wishlist model
        ->get();

    return view('layouts.header', compact('cart'));
}

        public function increaseQuantity(Request $request, Product $product) {
    $user = $request->user();
    $cartItem = $user->cart()->where('product_id', $product->id)->first();

    if ($cartItem) {
        $cartItem->pivot->quantity += 1;
        $cartItem->pivot->save();
    }

    return redirect()->back()->with('success', 'Quantity increased.');
}

    public function decreaseQuantity(Request $request, Product $product) {
    $user = $request->user();
    $cartItem = $user->cart()->where('product_id', $product->id)->first();

    if ($cartItem) {
        $cartItem->pivot->quantity -= 1;

        if ($cartItem->pivot->quantity <= 0) {
            
            $user->cart()->detach($product->id);
        } else {
            $cartItem->pivot->save();
        }
    }

    return redirect()->back()->with('success', 'Quantity decreased.');
}

    public function addToCart(Request $request, Product $product)
{
    // Add the product to the cart
    // You can access the product ID from $product and use the $request data

    return response()->json(['message' => 'Product added to cart']);
}
  
}
