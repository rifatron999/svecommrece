<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['method','trx_id','sender_mobile_number','status','time','slug'];
    protected $table ='payments';

    public function orders()
    {
        return $this->hasOne(Order::class,'payment_id');
    }
}
