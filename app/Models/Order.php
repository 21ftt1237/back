<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderList;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['user_id', 'product_id', 'quantity'];

    
   public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function orderLists()
    {
        return $this->hasMany(OrderList::class, 'orders_id');
    }

    
}
