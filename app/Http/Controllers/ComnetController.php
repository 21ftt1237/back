<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repository\IComnetRepository;
use Illuminate\Http\Request;

class ComnetController extends Controller
{

    public $comnet;

    public function __construct(IComnetRepository $comnet)
    {
        $this->comnet = $comnet;
        $this->middleware('auth')->except(['create']);
    }



        public function indexComnet()
    {
        // return all products

        $products =  $this->comnet->comnetShowAllProduct();

        return view('comnet.comnet')->with('products', $products);

    }


    public function comnetShowAllProduct() {
        $products =  $this->comnet->comnetShowAllProduct();
        return view('comnet.comnet')->with('products', $products);
    }


    public function comnetDeleteProduct($id) {
        $this->comnet->comnetDeleteProduct($id);
        return redirect('/products');
    }

     public function create()
    {
        
        // create page
        return view('comnet.create');

        
    }

    public function store(Request $request)
    {

        // validate and store data
        $request->validate([
            'image_link' => 'required',
            'store_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        //image upload

$data = $request->all();

if ($image = $request->file('image_link')) {
    $name = time() . '.' . $image->getClientOriginalName();
    $path = $image->storeAs('images', $name, 'public');
    $data['image_link'] = '/images/' . $name;
}

$this->comnet->createProduct($data);

return redirect('/products');


    }

    public function index()
{
    $products = Product::all();
    $newlyAddedProducts = $this->comnet->getNewlyAddedProducts();
    return view('comnet.comnet', compact('products', 'newlyAddedProducts'));
}

    
    
  public function indexGameCentral()
{
    $products = Product::all();
    return view('store.gameside', compact('products', 'newlyAddedProducts'));
}
      public function indexWishlist()
{
    $products = Product::all();
    return view('Wishlist.BruZoneWishlist', compact('products', 'newlyAddedProducts'));
}
       public function indexDigital()
{
    $products = Product::all();
    return view('store.digital', compact('products', 'newlyAddedProducts'));
}
           public function indexAvenue()
{
    $products = Product::all();
    return view('store.route66', compact('products', 'newlyAddedProducts'));
}
               public function indexNimanja()
{
    $products = Product::all();
    return view('store.simanja', compact('products', 'newlyAddedProducts'));
}
           public function indexGuardian()
{
    $products = Product::all();
    return view('store.Defender', compact('products', 'newlyAddedProducts'));
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
