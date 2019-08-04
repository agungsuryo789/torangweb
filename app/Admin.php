<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    public function role()
    {
        return $this->belongsto('App\Role','id_role');
    }
}
