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
        $product = new Product();
        $product->image_link = $data['image_link'];
        $product->store_id = $data['store_id'];
        $product->name = $data['name'];
        $product->price = $data['price'];
        $product->description = $data['description'];


        $product->save();
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

     public function editProduct($id)
    {
        return Product::find($id);
    }

    public function updateProduct($id, array $data)
    {
Product::find($id)->update([
    'name' => $data['name'],
    'store_id' => $data['store_id'],
    'price' => $data['price'],
    'image_link' => $data['image_link'],
    'description' => $data['description']
        ]);
    }

}



?>
