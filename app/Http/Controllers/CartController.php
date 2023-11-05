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
    $user = auth()->user(); 
    $cart = Cart::where('user_id', $user->id)
        ->with('product') 
        ->get();

    return view('layouts.header', compact('cart'));
}
    public function indexCheckout()
{
    //display cart item into checkout
    $user = auth()->user(); 
    $cart = Cart::where('user_id', $user->id)
        ->with('product') 
        ->get();

    return view('checkout', compact('cart'));
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

  
}
