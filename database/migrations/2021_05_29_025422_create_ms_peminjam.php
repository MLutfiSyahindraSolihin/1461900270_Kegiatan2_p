<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsPeminjam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_peminjam', function (Blueprint $table) {
            $table->autoIncrementingStartingValues('kode_peminjam');
            $table->string('nama_peminjam',30);
            $table->string('alamat_peminjam',50);
            $table->bigInteger('telp_peminjam');
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
        Schema::dropIfExists('ms_peminjam');
    }
}
