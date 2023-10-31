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

public function show()
{
    // Retrieve the wishlist for the currently authenticated user (assuming you have user authentication)
    $user_id = auth()->id();
    $wishlist = DB::table('wishlist')
        ->join('products', 'wishlist.product_id', '=', 'products.id')
        ->select('products.name', 'wishlist.created_at', 'wishlist.updated_at')
        ->where('wishlist.user_id', $user_id)
        ->get();

    return view('wishlist.show', ['wishlist' => $wishlist]);
}
    
}
