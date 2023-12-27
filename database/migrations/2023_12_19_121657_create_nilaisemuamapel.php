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
        Schema::create('nilaisemuamapel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->float('c1');
            $table->float('c2');
            $table->float('c3');
            $table->float('c4');
            $table->float('c5');
            $table->float('c6');
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
        Schema::dropIfExists('nilaisemuamapel');
    }
};
