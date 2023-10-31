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
    
}
