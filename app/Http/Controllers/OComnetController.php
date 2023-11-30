<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repository\IOComnetRepository;
use Illuminate\Http\Request;

class OComnetController extends Controller
{

    public $ocomnet;

    public function __construct(IOComnetRepository $ocomnet)
    {
        $this->ocomnet = $ocomnet;
    }


    public function ocomnetShowAllProduct() {
        $products =  $this->ocomnet->ocomnetShowAllProduct();
        return view('owner.Ocomnet')->with('products', $products);
    }


    public function ocomnetDeleteProduct($id) {
        $this->ocomnet->ocomnetDeleteProduct($id);
        return redirect('/owner/comnet');
    }

    public function edit($id)
    {
        $product = $this->ocomnet->getProductById($id);

        return view('comnet.edit', compact('product'));

}
