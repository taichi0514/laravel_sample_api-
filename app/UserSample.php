<?php

namespace App;

use \App\UserSample;
use Illuminate\Database\Eloquent\Model;


class UserSample extends Model
{

    protected $table = 'UserSample';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
