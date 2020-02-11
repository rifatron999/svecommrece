<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use test\Mockery\HasUnknownClassAsTypeHintOnMethod;

class Customer extends Authenticatable
{
    use Notifiable;
    protected $fillable = ['name','email','image','type','address','city','password','phone','gender','slug'];
    protected $table = 'customers';

    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
