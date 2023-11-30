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

    public function createProduct(array $data)
    {
        return Product::create($data);
    }

    public function getRecentlyCreatedProduct()
    {
  
        return Product::latest()->first();
    }

    public function getNewlyAddedProducts()
{
    return Product::where('created_at', '>=', now()->subDays(7)) // Adjust the timeframe as needed
        ->orderBy('created_at', 'desc')
        ->get();
}

}



?>
