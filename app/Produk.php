<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';
    protected $fillable = ['nama', 'deskripsi', 'foto','foto2','foto3', /* 'kategori_id', */ 'slug', 'harga'];

    public function kategori()
    {
        return $this->belongsTo(Kategoriproduk::class);
    }
}
