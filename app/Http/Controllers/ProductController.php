<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  public function index()
{
    $products = Product::all();
    return view('netcom', compact('products'));
}
    
  public function indexGameCentral()
{
    $products = Product::all();
    return view('gamecentral', compact('products'));
}

       public function indexDigital()
{
    $products = Product::all();
    return view('digital', compact('products'));
}

           public function indexAvenue()
{
    $products = Product::all();
    return view('avenue', compact('products'));
}

               public function indexNimanja()
{
    $products = Product::all();
    return view('Nimanja', compact('products'));
}

           public function indexGuardian()
{
    $products = Product::all();
    return view('Guardian', compact('products'));
}

public function cart()
{
    $user = Auth::user();
    $cart = $user->cart; 
    return view('netcom', compact('cart'));
}


public function addToCart(Request $request, Product $product) {
    // Ensure the product exists
    if (!$product) {
        return response()->json(['error' => 'Product not found'], 404);
    }

    $user = $request->user();

    // Check if the product is already in the user's cart
    $existingCartItem = $user->cart()->where('product_id', $product->id)->first();

    // If an existing cart item is found, update the quantity
    if ($existingCartItem) {
        $existingCartItem->pivot->quantity += 1;
        $existingCartItem->pivot->save();
    } else {
        // If not found, attach the product to the cart with quantity 1
        $user->cart()->attach($product->id, ['quantity' => 1]);
    }
      Log::info('Product added to cart', ['product_id' => $product->id]);
    return response()->json(['message' => 'Product added to Cart']);
}




    
public function addToWishlist(Request $request, Product $product) {
    $user = $request->user();

     if ($user->wishlist()->where('product_id', $product->id)->count() >= 1) {
    return redirect()->back()->with('error', 'You can only add a maximum of 2 instances of the same product to your wishlist.');
    }
    
    $user->wishlist()->attach($product->id);
    return redirect()->back()->with('success', 'Product added to wishlist.');
}
public function removeFromWishlist(Request $request, Product $product) {
    $user = $request->user();
    $user->wishlist()->detach($product->id);
    return redirect()->back()->with('success', 'Product removed from wishlist.');
}

    public function show($id)
{
    $product = Product::findOrFail($id); 
    return view('products.show', compact('product'));
}

    
}
