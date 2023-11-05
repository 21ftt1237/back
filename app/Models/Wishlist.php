<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
   
    protected $table = 'wishlist';

   
    protected $fillable = [
        'product_id',
        'user_id',
    ];

    // Define a relationship with the Product model
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // Define a relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
