<?php

namespace App\Repository;

use App\Models\Product;

class DefenderRepository implements IDefenderRepository {

    public function defenderShowAllProduct()
    {
        return Product::all();
    }

        public function indexComnet()
    {
        return Product::all();
    }

    public function defenderDeleteProduct($id)
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
