<?php

namespace App\Repository;

use App\Models\Product;

class ComnetRepository implements IComnetRepository {

    public function comnetShowAllProduct()
    {
        return Product::all();
    }

        public function indexComnet()
    {
        return Product::all();
    }

    public function comnetDeleteProduct($id)
    {
        return Product::find($id)->delete();
    }

    public function comnetCreateProduct(array $data)
    {
        return Product::create($data);
    }

    public function getRecentlyCreatedProduct()
    {
  
        return Product::latest()->first();
    }

}



?>
