<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsPeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_peminjaman', function (Blueprint $table) {
            $table->autoIncrementingStartingValues('kode_peminjaman');
            $table->string('kode_petugas',10);
            $table->string('kode_peminjam',10);
            $table->date('tgl_peminjaman');
            $table->date('tgl_kembali');
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
        Schema::dropIfExists('ms_peminjaman');
    }
}
