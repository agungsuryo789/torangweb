<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'id_users');
    }
    public function order()
    {
        return $this->hasMany('App\Order');
    }
    public $timestamps = false;
    protected $table = 'order_details';
}
