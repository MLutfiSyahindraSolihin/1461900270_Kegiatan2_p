<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CerateMsKartuPendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema:: create('ms_kartu_pendaftaran', function (Blueprint $table){
            $table->autoIncrementingStartingValues('kode_kartu');
            $table->string('kode_petugas',10);
            $table->string('kode_peminjam',10);
            $table->double('tgl_pembuatan');
            $table->tinyInteger('status_aktif');
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
        Schema::dropIfExists('ms_kartu_pendaftaran');
    }
}
