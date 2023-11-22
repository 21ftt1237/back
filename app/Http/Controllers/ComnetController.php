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
        return view('comnet.index')->with('products', $products);
    }


    public function comnetDeleteProduct($id) {
        $this->comnet->comnetDeleteProduct($id);
        return redirect('/owner/products');
    }

}
