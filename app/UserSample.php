<?php

namespace App;

use \App\UserSample;
use Illuminate\Database\Eloquent\Model;


class UserSample extends Model
{

    protected $table = 'UserSample';
//    上記コードでテーブル指定
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
