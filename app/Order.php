<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['customer_id','shipping_id','payment_id','vendor_id','invoice_id','product_ids','selling_price','quantity','offer_type','offer_percentage','free_product_ids','subtotal','total','status','slug'];
    protected $table = 'orders';
}
