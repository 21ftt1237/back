<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repository\IProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public $product;

    public function __construct(IProductRepository $product) {
        $this->product = $product;
    }



    public function indexUser()
    {
        // return all products

        $products =  $this->product->getAllProducts();

        return view('product.index')->with('products', $products);

    }

   // public function show($id)
    //{
        // get single product

      //  $product = $this->product->getSingleProduct($id);
       // return view('product.show')->with('product', $product);
    //}


    public function create()
    {

        // create page
        return view('product.create');
    }


    public function store(Request $request)
    {

        // validate and store data
        $request->validate([
            'picture' => 'required',
            'title' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        //image upload

        $data = $request->all();


        if ($image = $request->file('picture')) {
        $name = time() . '.' . $image->getClientOriginalName();
        $path = $image->storeAs('images', $name, 'public');
        $data['picture'] = '/images/' . $name;

    }

        $this->product->createProduct($data);

        return redirect('/products');

    }





    public function edit($id)
    {
        $product = $this->product->editProduct($id);
        return view('product.edit')->with('product', $product);
    }


    public function update(Request $request, $id)
    {

        // validate and store data
        $request->validate([
            'picture' => 'required',
            'title' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        //image upload

        $data = $request->all();

        if($image = $request->file('picture')) {
            $name = time(). '.' .$image->getClientOriginalName();
            $image->move(public_path('images'), $name);
            $data['picture'] = "$name";
        }

        $this->product->updateProduct($id, $data);

        return redirect('/products');

    }



    

    
  public function index()
{
    $products = Product::all();
    return view('comnet.comnet', compact('products'));
}
    
public function indexGameCentral()
{
    $products = Product::all();
    return view('gameside.gameside', compact('products'));
}
      public function indexWishlist()
{
    $products = Product::all();
    return view('Wishlist.BruZoneWishlist', compact('products'));
}
       public function indexDigital()
{
    $products = Product::all();
    return view('digital.digital', compact('products'));
}
           public function indexAvenue()
{
    $products = Product::all();
    return view('route66.route66', compact('products'));
}
               public function indexNimanja()
{
    $products = Product::all();
    return view('simanja.simanja', compact('products'));
}
           public function indexGuardian()
{
    $products = Product::all();
    return view('defender.Defender', compact('products'));
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
