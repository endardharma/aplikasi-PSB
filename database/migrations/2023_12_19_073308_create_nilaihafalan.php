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
        Schema::create('nilaihafalan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->integer('jumlah_juz');
            $table->integer('makhrodul_huruf');
            $table->integer('ketentuan_ilmu_tajdwid');
            $table->integer('irama_lagu');
            $table->integer('fasokhah');
            $table->float('nilai_hafalan');
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
        Schema::dropIfExists('nilaihafalan');
    }
};
