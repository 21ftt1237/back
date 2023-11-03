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
   $productId = $product->id;

    // Retrieve the user's cart data from the session (or from your database if needed)
    $cart = session()->get('cart', []);

    // Check if the product is already in the cart
    if (array_key_exists($productId, $cart)) {
        // If the product is in the cart, you can increment its quantity or perform other actions
        $cart[$productId]['quantity']++;
    } else {
        // If the product is not in the cart, add it
        $cart[$productId] = [
            'product' => $product,
            'quantity' => 1,
        ];
    }

    // Update the cart data in the session
    session()->put('cart', $cart);

    // You can return a response with cart data or a success message
    return response()->json([
        'message' => 'Product added to cart',
        'cart' => $cart, // You can return the updated cart data to update the client-side cart
    ]);
}
  
}
