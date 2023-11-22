<?php

namespace App\Repository;

use App\Models\Product;

class ProductRepository implements IProductRepository {

    public function getAllProducts()
    {
        return Product::all();
    }

    public function getSingleProduct($id)
    {
        return Product::find($id);
    }

    public function createProduct(array $data)
    {
        $product = new Product();
        $product->picture = $data['image_link'];
        $product->title = $data['name'];
        $product->price = $data['price'];
        $product->description = $data['description'];

        $product->save();
    }

    public function editProduct($id)
    {
        return Product::find($id);
    }

    public function updateProduct($id, array $data)
    {
        $product = Product::find($id);
        $product->picture = $data['image_link'];
        $product->title = $data['name'];
        $product->price = $data['price'];
        $product->description = $data['description'];
        $product->save();
    }
}
?>
