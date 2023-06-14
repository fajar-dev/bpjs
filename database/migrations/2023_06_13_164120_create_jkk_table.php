<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJkkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jkk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tenaga_kerja');
            $table->string('no_kpj');
            $table->string('perusahaan');
            $table->date('tgl_terima_berkas');
            $table->string('rs');
            $table->string('tagihan');
            $table->string('stmb');
            $table->string('kekurangan_berkas');    
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
        Schema::dropIfExists('jkk');
    }
}
