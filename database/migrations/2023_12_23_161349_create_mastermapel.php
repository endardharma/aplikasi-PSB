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
        Schema::create('mastermapel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mapel');
            $table->string('kelompok_mapel'); // Kelompok A/B/C
            $table->string('nama_nilai'); // Pengetahuan/Keterampilan
            $table->string('kelas');
            $table->string('jurusan');
            $table->string('semester');
            $table->string('tahun_ajar');
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
        Schema::dropIfExists('mastermapel');
    }
};
