<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gudangbarang', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->string('nama_barang');
            $table->integer('harga_barang');
            $table->integer('stok_barang');
            $table->integer('id_supplier');
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
        Schema::dropIfExists('gudangbarang');
    }
};
