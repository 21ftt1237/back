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
    }


    public function comnetShowAllProduct() {
        $products =  $this->comnet->comnetShowAllProduct();
        return view('store.comnet')->with('products', $products);
    }


    public function comnetDeleteProduct($id) {
        $this->comnet->comnetDeleteProduct($id);
        return redirect('/owner/products');
    }

     public function create()
    {

        // create page
        return view('store.CComnet');
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

        return redirect('/store/comnet');

    }

}
