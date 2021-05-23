<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKunjunganPoliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kunjungan_poli', function (Blueprint $table) {
            $table->id();
            $table->integer('id_periksa');
            $table->integer('id_poli_bagian');
            $table->integer('id_dokter_pemeriksa');
            $table->integer('id_perawat_pemeriksa');
            $table->integer('id_penyakit');
            $table->integer('biaya_pendaftaran');
            $table->integer('created_by');
            $table->integer('edited_by');
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
        Schema::dropIfExists('kunjungan_poli');
    }
}
