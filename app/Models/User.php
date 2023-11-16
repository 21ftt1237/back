<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

   public function cart()
{
    return $this->belongsToMany(Product::class, 'cart')->withPivot('product_id', 'quantity')->withTimestamps();
}
    
public function wishlist()
{
    return $this->belongsToMany(Product::class, 'wishlist', 'user_id', 'product_id');
}

public function reviews()
{
    return $this->hasMany(Review::class);
}

public function isAdmin()
    {
        return $this->role_id === 1;

    }

    public function isStoreOwner()
{
    return $this->role_id === 2;
}
}    




