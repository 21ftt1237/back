<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repository\IOwnerRepository;
use Illuminate\Http\Request;

class OwnerController extends Controller
{

    public $owner;

    public function __construct(IOwnerRepository $owner)
    {
        $this->owner = $owner;
    }


    public function ownerShowAllProduct() {
        $products =  $this->owner->adminShowAllProduct();
        return view('owner.netcom')->with('products', $products);
    }


    public function ownerDeleteProduct($id) {
        $this->owner->ownerDeleteProduct($id);
        return redirect('/owner/products');
    }

}
