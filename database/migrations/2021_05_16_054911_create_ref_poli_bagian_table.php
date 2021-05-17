<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefPoliBagianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_poli_bagian', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->string('nama');
            $table->decimal('harga_pendaftaran');
            $table->integer('id_user')->unique();
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
        Schema::dropIfExists('ref_poli_bagian');
    }
}
