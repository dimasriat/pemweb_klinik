<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableReservasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasi', function (Blueprint $table) {
            $table->string('id');
            $table->string('id_pasien');
            $table->string('tanggal_rencana_datang');
            $table->string('id_poli_bagian');
            $table->string('id_dokter');
            $table->string('no_telp');
            $table->string('status_pasien');
            $table->string('rcreated_by');
            $table->timestamp('rcreated_at')->nullable();
            $table->string('redited_by');
            $table->timestamp('redited_at')->nullable();
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
        Schema::dropIfExists('reservasi');
    }
}
