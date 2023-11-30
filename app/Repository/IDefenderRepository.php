<?php
namespace App\Repository;

interface IDefenderRepository {

    public function defenderShowAllProduct();

    public function indexComnet();

    public function defenderDeleteProduct($id);

    public function getNewlyAddedProducts();


}




?>
