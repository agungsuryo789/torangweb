<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
    public $timestamps = false;
    protected $table = 'carts';
}
