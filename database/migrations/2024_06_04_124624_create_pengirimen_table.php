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
        Schema::create('Pengiriman', function (Blueprint $table) {
            $table->id('id_pengiriman');
            $table->string('nama_pengirim',50);
            $table->string('nomer_telepon',50);
            $table->text('jenis_barang');
            $table->string('berat_barang', 100);
            $table->text('tujuan_barang');
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
        Schema::dropIfExists('pengirimen');
    }
};
