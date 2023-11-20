<?php
namespace App\Repository;

use Illuminate\Support\Facades\DB;

class StoreRepository
{
    public function getSingleStoreByName($storeName)
    {
        return DB::table('stores')->where('name', $storeName)->first();
    }