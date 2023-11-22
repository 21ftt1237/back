
<?php
namespace App\Repository;

interface IComnetRepository {

    public function getAllProducts();

    public function getSingleProduct($id);

    public function createProduct(array $data);

    public function editProduct($id);

    public function updateProduct($id, array $data);


}




?>