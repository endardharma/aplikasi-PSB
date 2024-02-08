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
        Schema::create('periode_kriterias', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kriteria')->index()->nullable();
            $table->foreign('kode_kriteria')->references('kode_kriteria')->on('masterkriteria')->onDelete('cascade');
            $table->float('bobot_kriteria')->default(0);
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
        Schema::dropIfExists('periode_kriterias');
    }
};
