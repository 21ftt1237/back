<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\User;

class OrderList extends Model
{
    use HasFactory;

    protected $table = 'orders_list';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'Total_price', 'status', 'created_at', 'updated_at'];

    public function order()
    {
      return $this->belongsTo(Order::class, 'orders_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
