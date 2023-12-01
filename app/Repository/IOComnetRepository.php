<?php

namespace App\Repository;

interface IOComnetRepository {

    public function ocomnetShowAllProduct();

    public function ocomnetDeleteProduct($id);

    
    public function createProduct(array $data);

     public function editProduct($id);

     public function updateProduct($id, array $data);

}




?>
