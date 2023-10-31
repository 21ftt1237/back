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

    public function addToWishlist(Request $request, $productId) {
    $user = $request->user(); // Get the current user
    $user->wishlist()->attach($productId);
    return redirect()->back()->with('success', 'Product added to wishlist.');
}
    
}
