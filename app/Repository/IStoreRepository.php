<?php
namespace App\Repository;

use Illuminate\Support\Facades\DB;

class StoreRepository implements IStoreRepository
{
    public function getSingleStoreByName($storeName)
    {
        return DB::table('stores')->where('name', $storeName)->first();
    }

  
}
