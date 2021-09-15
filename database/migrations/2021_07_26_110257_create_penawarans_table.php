<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenawaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penawarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('jenis_koneksi');
            $table->String('lokasi');
            $table->String('site_a')->nullable();
            $table->String('site_b')->nullable();
            $table->integer('bw');
            $table->integer('kontrak');
            $table->integer('monthly_bw');
            $table->integer('otc');
            $table->foreignId('perusahaan_id')->unsigned();
            $table->timestamps();
        });

        // Schema::table('files', function(Blueprint $table) {
        //     $table->foreign('penawaran_id')->references('id')->on('penawarans')->onUpdate('cascade')->onDelete('cascade');
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penawarans');
    }
}