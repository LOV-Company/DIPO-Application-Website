<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRentalPlace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table__rental_place', function (Blueprint $table) {
            $table->id();
            $table->pemilik();
            $table->jenis();
            $table->tipe();
            $table->harga();
            $table->ukuran();
            $table->fasilitas();
            $table->kondisi();
            $table->alamat();
            $table->foto1();
            $table->foto2();
            $table->foto3();
            $table->foto4();
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
        Schema::dropIfExists('table__rental_place');
    }
}
