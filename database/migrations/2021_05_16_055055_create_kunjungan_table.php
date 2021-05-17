<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKunjunganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kunjungan', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->integer('id_reservasi');
            $table->integer('id_pasien')->unique();
            $table->integer('id_penyakit');
            $table->char('tekanan_darah', 3);
            $table->char('denyut_nadi', 3);
            $table->char('usia_tahun', 4);
            $table->char('usia_bulan', 2);
            $table->char('usia_hari', 2);
            $table->string('created_by');
            $table->string('created_at');
            $table->string('edited_by');
            $table->string('edited_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kunjungan');
    }
}
