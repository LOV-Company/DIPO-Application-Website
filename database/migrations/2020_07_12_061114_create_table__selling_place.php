<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSellingPlace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table__selling_place', function (Blueprint $table) {
            $table->id();
            $table->penjual();
            $table->tipe();
            $table->harga_jual();
            $table->ukuran();
            $table->fasilitas();
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
        Schema::dropIfExists('table__selling_place');
    }
}
