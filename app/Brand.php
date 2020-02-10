<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['vendor_id','name','description','image','status','slug'];
    protected $table = 'brands';

    public function products()
    {
        return $this->hasMany(Product::class,'brand_id');
    }
}