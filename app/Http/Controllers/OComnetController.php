<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repository\IOwnerCRepository;
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


    public function ownerDeleteProduct($id) {
        $this->owner->ownerDeleteProduct($id);
        return redirect('/owner/products');
    }

}
