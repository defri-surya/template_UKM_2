<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategoriproduk extends Model
{
    protected $table = 'kategoriproduks';
    protected $fillable = ['nama'];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'kategori_id');
    }
}
