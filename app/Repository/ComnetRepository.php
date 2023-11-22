
<?php

namespace App\Repository;

use App\Models\Product;

class ComnetRepository implements IComnetRepository {

    public function comnetShowAllProduct()
    {
        return Product::all();
    }

    public function comnetDeleteProduct($id)
    {
        return Product::find($id)->delete();
    }

}



?>
