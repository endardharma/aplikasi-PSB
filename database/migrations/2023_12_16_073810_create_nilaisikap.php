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
        Schema::create('nilaisikap', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('keterangan_sikap');
            $table->float('nilai_sikap');
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
        Schema::dropIfExists('nilaisikap');
    }
};
