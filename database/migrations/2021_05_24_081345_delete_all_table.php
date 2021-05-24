<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteAllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('pasien');
        Schema::dropIfExists('perawat');
        Schema::dropIfExists('ref_poli_bagian');
        Schema::dropIfExists('kunjungan');
        Schema::dropIfExists('reservasi');
        Schema::dropIfExists('tindakan');
        Schema::dropIfExists('kunjungan_poli');

        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('no_rm')->nullable();
            $table->string('nama')->nullable();
            $table->string('nik')->nullable();
            $table->string('alamat')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->integer('id_kelurahan')->nullable();
            $table->integer('id_kecamatan')->nullable();
            $table->integer('id_kabupaten')->nullable();
            $table->integer('id_provinsi')->nullable();
            $table->integer('id_user')->nullable();
            $table->integer('created_by')->nullable();
            $table->string('created_at')->nullable();
            $table->integer('edited_by')->nullable();
            $table->string('edited_at')->nullable();
        });

        Schema::create('reservasi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pasien')->nullable();
            $table->string('tanggal_rencana_datang')->nullable();
            $table->integer('id_poli_bagian')->nullable();
            $table->integer('id_dokter')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('status_pasien')->nullable();
            $table->integer('created_by')->nullable();
            $table->string('created_at')->nullable();
            $table->integer('edited_by')->nullable();
            $table->string('edited_at')->nullable();
        });

        Schema::create('dokter', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->integer('id_poli_bagian')->nullable();
            $table->string('no_telp')->nullable();
            $table->integer('created_by')->nullable();
            $table->string('created_at')->nullable();
            $table->integer('edited_by')->nullable();
            $table->string('edited_at')->nullable();
        });

        Schema::create('perawat', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('no_telp')->nullable();
            $table->integer('created_by')->nullable();
            $table->string('created_at')->nullable();
            $table->integer('edited_by')->nullable();
            $table->string('edited_at')->nullable();
        });

        Schema::create('ref_poli_bagian', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('harga_pendaftaran')->nullable();
            $table->integer('id_user')->nullable();
            $table->integer('created_by')->nullable();
            $table->string('created_at')->nullable();
            $table->integer('edited_by')->nullable();
            $table->string('edited_at')->nullable();
        });

        Schema::create('kunjungan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_reservasi')->nullable();
            $table->integer('id_pasien')->nullable();
            $table->integer('id_penyakit')->nullable();
            $table->string('tekanan_darah')->nullable();
            $table->string('denyut_nadi')->nullable();
            $table->string('usia_tahun')->nullable();
            $table->string('usia_bulan')->nullable();
            $table->string('usia_hari')->nullable();
            $table->integer('created_by')->nullable();
            $table->string('created_at')->nullable();
            $table->integer('edited_by')->nullable();
            $table->string('edited_at')->nullable();
        });

        Schema::create('kunjungan_poli', function (Blueprint $table) {
            $table->id();
            $table->integer('id_periksa')->nullable();
            $table->string('biaya_pendaftaran')->nullable();
            $table->integer('id_poli_bagian')->nullable();
            $table->integer('id_dokter_pemeriksa')->nullable();
            $table->integer('id_perawat_pemeriksa')->nullable();
            $table->integer('id_penyakit')->nullable();
            $table->integer('created_by')->nullable();
            $table->string('created_at')->nullable();
            $table->integer('edited_by')->nullable();
            $table->string('edited_at')->nullable();
        });

        Schema::create('tindakan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_periksa_poli')->nullable();
            $table->integer('id_tindakan')->nullable();
            $table->string('harga')->nullable();
            $table->string('jml')->nullable();
            $table->integer('created_by')->nullable();
            $table->string('created_at')->nullable();
            $table->integer('edited_by')->nullable();
            $table->string('edited_at')->nullable();
        });

        Schema::create('bhp', function (Blueprint $table) {
            $table->id();
            $table->integer('id_bhp')->nullable();
            $table->string('harga')->nullable();
            $table->string('jml')->nullable();
            $table->integer('created_by')->nullable();
            $table->string('created_at')->nullable();
            $table->integer('edited_by')->nullable();
            $table->string('edited_at')->nullable();
        });

        Schema::create('obat', function (Blueprint $table) {
            $table->id();
            $table->integer('id_periksa_poli')->nullable();
            $table->integer('id_obat')->nullable();
            $table->string('harga')->nullable();
            $table->string('jml')->nullable();
            $table->integer('created_by')->nullable();
            $table->string('created_at')->nullable();
            $table->integer('edited_by')->nullable();
            $table->string('edited_at')->nullable();
        });

        Schema::create('ref_tindakan', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('harga')->nullable();
            $table->integer('created_by')->nullable();
            $table->string('created_at')->nullable();
            $table->integer('edited_by')->nullable();
            $table->string('edited_at')->nullable();
        });

        Schema::create('ref_obat', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('harga')->nullable();
            $table->integer('created_by')->nullable();
            $table->string('created_at')->nullable();
            $table->integer('edited_by')->nullable();
            $table->string('edited_at')->nullable();
        });

        Schema::create('ref_penyakit_icd', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->nullable();
            $table->string('nama')->nullable();
            $table->integer('created_by')->nullable();
            $table->string('created_at')->nullable();
            $table->integer('edited_by')->nullable();
            $table->string('edited_at')->nullable();
        });

        Schema::create('ref_bhp', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('harga')->nullable();
            $table->integer('created_by')->nullable();
            $table->string('created_at')->nullable();
            $table->integer('edited_by')->nullable();
            $table->string('edited_at')->nullable();
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
        Schema::dropIfExists('reservasi');
        Schema::dropIfExists('dokter');
        Schema::dropIfExists('perawat');
        Schema::dropIfExists('ref_poli_bagian');
        Schema::dropIfExists('kunjungan');
        Schema::dropIfExists('kunjungan_poli');
        Schema::dropIfExists('tindakan');
        Schema::dropIfExists('bhp');
        Schema::dropIfExists('obat');
        Schema::dropIfExists('ref_tindakan');
        Schema::dropIfExists('ref_obat');
        Schema::dropIfExists('ref_penyakit_icd');
        Schema::dropIfExists('ref_bhp');
    }
}
