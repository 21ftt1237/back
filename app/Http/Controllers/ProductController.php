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

public function addToCart(Request $request, Product $product) {
    $user = $request->user();
    $user->cart()->attach($product->id);
    return redirect()->back()->with('success', 'Product added to Cart.');
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

public function indexBruzoneWishlist()
{   \Log::info('indexBruzoneWishlist method called');
    dd('Method executed');
    // Get the currently authenticated user
    $user = auth()->user();

    // Retrieve the wishlist products for the user
    $wishlistProducts = $user->wishlist;

    return view('Wishlist.BruZoneWishlist', compact('wishlistProducts'));
}


    
}
