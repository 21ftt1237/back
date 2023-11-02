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
    $cart = Product::all();
    return view('netcom', compact('cart'));
}



public function addToCart(Request $request, Product $product) {
    $user = $request->user();

   
    $existingCartItem = $user->cart()->where('product_id', $product->id)->first();

    if ($existingCartItem) {
        
        $existingCartItem->pivot->quantity = 1;
        $existingCartItem->pivot->save();
    } else {
       
        $user->cart()->attach($product->id, ['quantity' => 1]);
    }

    return redirect()->back()->with('success', 'Product added to Cart.');
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
