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


@tailwind base;
@tailwind components;
@tailwind utilities;

comnet:
RAZER CUSHION  			58.00	razercushion.png			
RAZER STRIDER MOUSEPAD		49.00	razerstrider.png
LOGITECH G203 LIGHTSYNC		68.00	g203.png				
ANKER POWER BANK METRO		79.00	anker.png
RAZER KRAKEN X HEADSET		59.00	razerkraken.png
CORSAIR HEADSET STAND ST50  	53.00	corsairstand.png


Razer Head Cushion Chroma Neck & Head Support for Gaming Chairs: Ergonomically Designed - Memory Foam Padding - Wrapped in Plush Gray - Chroma RGB

Razer Strider Hybrid Mouse Mat with a Soft Base & Smooth Glide: Firm Gliding Surface - Anti-Slip Base - Rollable & Portable - Anti-Fraying Stitched Edges - Water-Resistant - XLarge

Logitech G203 LIGHTSYNC Wired Gaming Mouse, 8,000 DPI, Rainbow Optical Effect RGB, 6 Programmable Buttons, On-Board Memory, PC/Mac Computer, Laptop Compatible - Black (Renewed)

Anker Portable Charger, Power Bank, 20K Battery Pack with PowerIQ Technology and USB-C (Recharging Only) for iPhone 15/15 Plus/15 Pro/15 Pro Max, iPhone 14/13/12 Series, Samsung Galaxy (Black)

Razer Kraken Gaming Headset: Lightweight Aluminum Frame - Retractable Noise Isolating Microphone - for PC, PS4, PS5, Switch, Xbox One, Xbox Series X & S, Mobile - 3.5 mm Headphone Jack - Black

Corsair ST50 RGB Premium Headset Stand with 7.1 Surround Sound - 3.5mm and 2xUSB 3.0,Aluminum








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


    
    public function index1($storeName)
    {
     //$store = $this->store->getSingleStoreByName($storeName);

    //if (!$store) {
      //  abort(404);
    //}

    //$products = $this->product->getProductsByStoreId($store->id);

    //$viewName = 'owner.' . strtolower($store->name);
    //return view($viewName, compact('products', 'store'));
    
    // Directly query the database
    $store = DB::table('stores')->where('name', $storeName)->first();

    if (!$store) {
        abort(404);
    }

    // Directly query the database for products related to the store
    $products = DB::table('products')->where('store_id', $store->id)->get();

    $viewName = 'owner.' . strtolower($store->name);
    return view($viewName, compact('products', 'store'));
    
    }

    public function getAllProducts()
    {
        return Product::all();
    }

    public function getSingleProduct($id)
    {
        return Product::find($id);
    }

    public function createProduct(array $data)
    {
        $product = new Product();
        $product->store_id = $data['store_id'];
        $product->name = $data['name'];
        $product->price = $data['price'];
        $product->description = $data['description'];
        $product->image_link = $data['image_link'];

        $product->save();
    }

    public function editProduct($id)
    {
        return Product::find($id);
    }

    public function updateProduct($id, array $data)
    {
        Product::find($id)->update([
            'store_id' => $data['store_id'],
            'name' => $data['name'],
            'price' => $data['price'],
            'description' => $data['description'],
            'image_link' => $data['image_link'],
        ]);
    }

    





    






//USERS VIEW
    
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


// User views
    public function cart($storeName)
    {
        $user = Auth::user();
        $cart = $user->cart;

        return view($storeName, compact('cart'));
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



