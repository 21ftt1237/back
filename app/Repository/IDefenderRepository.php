<?php
namespace App\Repository;

interface IDefenderRepository {

    public function defenderShowAllProduct();

    public function defenderDeleteProduct($id);

    public function getNewlyAddedProducts();


}




?>
