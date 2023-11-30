<?php


namespace App\Repository;

use App\Models\Product;

class OComnetRepository implements IOComnetRepository {

    public function ocomnetShowAllProduct()
    {
        return Product::where('store_id', 1)->get();
    }

    public function ocomnetDeleteProduct($id)
    {
        return Product::find($id)->delete();
    }



}



?>
