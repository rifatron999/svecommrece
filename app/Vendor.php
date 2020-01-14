<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Vendor extends Authenticatable
{
    protected $fillable = ['name','email','password','type','status','image','slug','gender'];
    protected $table = 'vendors';
}
