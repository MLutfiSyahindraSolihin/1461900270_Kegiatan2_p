<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsPenerbit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_penerbit', function (Blueprint $table) {
            $table->autoIncrementingStartingValues('kode_penerbit');
            $table->string('nama_penerbit',20);
            $table->string('alamat_penerbit',50);
            $table->bigInteger('telp_penerbit');
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
        Schema::dropIfExists('ms_penerbit');
    }
}
