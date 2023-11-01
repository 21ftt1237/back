<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    // Define the table associated with this model (optional, Laravel will assume "wishlists" based on the class name)
    protected $table = 'wishlist';

    // Define the fillable fields (columns that can be mass-assigned)
    protected $fillable = [
        'product_id',
        'user_id',
        // Other wishlist fields, if any
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
