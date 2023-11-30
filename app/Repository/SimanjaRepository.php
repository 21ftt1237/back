<?php

namespace App\Repository;

use App\Models\Product;

class SimanjaRepository implements ISimanjaRepository {

    public function simanjaShowAllProduct()
    {
        return Product::all();
    }

    public function simanjaDeleteProduct($id)
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
