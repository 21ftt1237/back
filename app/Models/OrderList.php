<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class OrderList extends Model
{
    use HasFactory;

    protected $table = 'orders_list';

    public function order()
    {
      return $this->belongsTo(Order::class, 'orders_id');
    }

}
