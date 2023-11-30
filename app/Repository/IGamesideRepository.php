<?php
namespace App\Repository;

interface IGamesideRepository {

    public function gamesideShowAllProduct();

    public function gamesideDeleteProduct($id);

    public function getNewlyAddedProducts();


}




?>
