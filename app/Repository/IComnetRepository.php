<?php
namespace App\Repository;

interface IComnetRepository {

    public function comnetShowAllProduct();

    public function indexComnet();

    public function comnetDeleteProduct($id);

    public function createProduct(array $data);

     public function editProduct($id);

     public function updateProduct($id, array $data);


}




?>
