<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Order;



class OrderList extends Model
{
    use HasFactory;

 protected $table = 'orders_list';


public function orderLists()
{
    return $this->hasMany(OrderList::class);
}
    
}
