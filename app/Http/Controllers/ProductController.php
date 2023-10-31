<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

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

public function addToWishlist(Request $request, Product $product) {
    $user = $request->user();
    $user->wishlist()->attach($product->id);
    return redirect()->back()->with('success', 'Product added to wishlist.');
}

public function removeFromWishlist(Request $request, Product $product) {
    $user = $request->user();
    $user->wishlist()->detach($product->id);
    return redirect()->back()->with('success', 'Product removed from wishlist.');
}

public function showWishlist(Request $request) {
    $user = $request->user();
    $wishlist = $user->wishlistProducts; // Assuming you've defined a relationship in the User model

    return view('Wishlist.BruZoneWishlist', ['wishlist' => $wishlist]);
}


    
}
