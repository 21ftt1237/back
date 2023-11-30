<?php


namespace App\Repository;

use App\Models\Product;

class OComnetRepository implements IOComnetRepository {

    public function ocomnetShowAllProduct()
    {
        return Product::all();
    }

    public function ocomnetDeleteProduct($id)
    {
        return Product::find($id)->delete();
    }



}



?>
