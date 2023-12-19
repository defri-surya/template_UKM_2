<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detailtransaksi extends Model
{
    protected $table = 'detailtransaksis';
    protected $fillable = ['transaksi_id', 'produk_id', 'nama_produk', 'harga', 'foto', 'qty'];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
}
