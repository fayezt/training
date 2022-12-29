<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Customer extends Authenticatable
{
    protected $fillable=['name','email','password'];

    use HasFactory,HasApiTokens;

    protected $hidden = [
        'password',
    ];


}
