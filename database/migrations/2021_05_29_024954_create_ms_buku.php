<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_buku', function (Blueprint $table) {
            $table->autoIncrementingStartingValues('kode_buku');
            $table->string('kode_kategori',10);
            $table->string('kode_penerbit',10);
            $table->string('judul_buku',50);
            $table->integer('jumlah_buku');
            $table->string('pengarang_buku',50);
            $table->integer('tahun_terbit_buku');
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
        Schema::dropIfExists('ms_buku');
    }
}
