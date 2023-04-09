<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userlogin extends Model
{
    protected $fillable = [
        'name', 'email', 'password','otp',
    ];
}
