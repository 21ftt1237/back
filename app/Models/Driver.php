<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Driver extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected $table = 'drivers';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'driver_email',
        'driver_password',
    ];

    protected $hidden = [
        'driver_password',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['driver_password'] = bcrypt($value);
    }

    public function username()
    {
        return 'driver_email';
    }
    public function getAuthPassword()
{
    return $this->driver_password;
}
}
