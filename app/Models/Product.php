<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Product extends Model
{
    use HasFactory;

 protected $fillable = [
        'name', 'store_id', 'price', 'image_link',
    ];

public function wishlists(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'wishlist')->withTimestamps();
    }

    public function carts(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'cart')->withTimestamps();
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }


}
