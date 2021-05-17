<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePasien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->string('id');
            $table->string('no_rm');
            $table->string('nama');
            $table->string('nik');
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('rt');
            $table->string('rw');
            $table->string('id_kelurahan');
            $table->string('id_kecamatan');
            $table->string('id_kabupaten');
            $table->string('id_provinsi');
            $table->string('id_user');
            $table->string('pcreated_by');
            $table->timestamp('pcreated_at')->nullable();
            $table->string('pedited_by');
            $table->timestamp('pedited_at')->nullable();
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
        Schema::dropIfExists('pasien');
    }
}
