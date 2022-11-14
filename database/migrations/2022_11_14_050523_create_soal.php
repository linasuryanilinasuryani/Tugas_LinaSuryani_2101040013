<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_soal', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mk', 50);
            $table->string('dosen', 50);
            $table->integer('jumlah_soal');
            $table->string('keterangan', 255);
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
        Schema::dropIfExists('soal');
        //
    }
};
