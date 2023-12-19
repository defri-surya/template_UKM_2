<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_transaksi');
            $table->string('kode_invoice');
            $table->string('alamat_asal');
            $table->string('nama_customer');
            $table->string('tlp_customer');
            $table->string('alamat_customer');
            $table->string('total_qty');
            $table->string('subtotal');
            $table->string('total_harga');
            $table->string('total_berat');
            $table->string('kurir');
            $table->string('ongkir');
            $table->string('prov_id');
            $table->string('kab_id');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('status_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
