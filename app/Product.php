<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id','brand_id','vendor_id','name','specification','description','stock','image','price','offer_price','offer_percentage','size_capacity','model','color','status','slug'];
    protected $table = 'products';
}
