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

//Store Owner
 public function indexComnet()
    {
        $products = Product::all();
        return view('comnet', compact('products'));
    }

    public function indexGameside()
    {
        $products = Product::all();
        return view('gameside', compact('products'));
    }

    public function indexDigitalUniverse()
    {
        $products = Product::all();
        return view('digitaluniverse', compact('products'));
    }

    public function indexRoute66()
    {
        $products = Product::all();
        return view('route66', compact('products'));
    }

    public function indexDefender()
    {
        $products = Product::all();
        return view('defender', compact('products'));
    }

    public function indexSimanja()
    {
        $products = Product::all();
        return view('simanja', compact('products'));
    }

    
    public function index1($storeId)
    {
   
        $store = Store::findOrFail($storeId);

        $products = $store->products;
        
        $viewName = 'owner.' . strtolower($store->name);

        return view($viewName, compact('products', 'store'));
    }





    







    
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

      public function indexWishlist()
{
    $products = Product::all();
    return view('Wishlist.BruZoneWishlist', compact('products'));
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

    
    public function show($id)
{
    $product = Product::findOrFail($id); 
    return view('products.show', compact('product'));
}

    
}
