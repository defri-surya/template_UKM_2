<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';
    protected $fillable = [
        'tgl_transaksi', 
        'kode_invoice', 
        'alamat_asal', 
        'nama_customer', 
        'tlp_customer', 
        'alamat_customer', 
        'total_qty', 
        'total_harga', 
        'subtotal', 
        'total_berat', 
        'kurir', 
        'ongkir', 
        'prov_id', 
        'kab_id', 
        'provinsi', 
        'kabupaten', 
        'status_pembayaran'
];

    public function detailtransaksi()
    {
        return $this->hasMany(Detailtransaksi::class, 'transaksi_id', 'id');
    }
}
