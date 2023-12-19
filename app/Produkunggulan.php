<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produkunggulan extends Model
{
    protected $tabel = 'produkunggulans';
    protected $fillable = ['foto', 'deskripsi', 'nama', 'slug', 'harga'];
}
