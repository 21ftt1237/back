<?php
namespace App\Repository;

interface IDigitalRepository {

    public function digitalShowAllProduct();



    public function digitalDeleteProduct($id);

    public function getNewlyAddedProducts();


}




?>
