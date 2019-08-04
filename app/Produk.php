<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
    public $timestamps = false;
    public function kategori()
    {
        return $this->belongsto('App\Kategori','id_kategori');
    }
    protected $fillable = ['nama','expire_date','harga','diskon','status_produk','status_diskon','id_kategori','deskripsi'];
}
