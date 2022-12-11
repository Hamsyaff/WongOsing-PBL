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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ID_Produk');
            $table->string('Nama_Produk');
            $table->bigInteger('ID_Kategori');
            $table->string('Harga_Jual_Produk');
            $table->string('Harga_Beli_Produk');
            $table->string('Stok_Barang');
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
};
