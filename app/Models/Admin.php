<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    protected $table = 'Admin';

    use HasFactory;
   
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];
  
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
