<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
           // $table->foreignId('kategori_id')->constrained('kategoriproduks');
            $table->text('foto')->nullable();
            $table->text('foto2')->nullable();
            $table->text('foto3')->nullable();
            $table->string('nama');
            $table->string('slug');
            $table->string('harga');
            $table->text('deskripsi');
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
        Schema::dropIfExists('produks');
    }
}
