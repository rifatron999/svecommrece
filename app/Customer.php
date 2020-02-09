<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name','email','address','city','password','phone','gender','slug'];
    protected $table = 'customers';
}
