<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function OrderDetail()
    {
        return $this->belongsTo('App\OrderDetail', 'id_orderdetail');
    }
    public $timestamps = false;
}
