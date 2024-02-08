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
        Schema::create('nilai_semua_kriterias', function (Blueprint $table) {
            $table->id();
            $table->string('nis')->index()->nullable();
            $table->foreign('nis')->references('nis')->on('mastersiswa')->onDelete('cascade');

            $table->bigInteger('nilairaport_id')->index()->unsigned()->nullable();
            $table->foreign('nilairaport_id')->references('id')->on('nilairaport')->onDelete('cascade');
            
            $table->bigInteger('nilaiketidakhadiran_id')->index()->unsigned()->nullable();
            $table->foreign('nilaiketidakhadiran_id')->references('id')->on('nilaiketidakhadiran')->onDelete('cascade');
            
            $table->bigInteger('nilaisikap_id')->index()->unsigned()->nullable();
            $table->foreign('nilaisikap_id')->references('id')->on('nilaisikap')->onDelete('cascade');
            
            $table->bigInteger('nilaiprestasi_id')->index()->unsigned()->nullable();
            $table->foreign('nilaiprestasi_id')->references('id')->on('nilaiprestasi')->onDelete('cascade');
            
            $table->bigInteger('nilaiketerlambatan_id')->index()->unsigned()->nullable();
            $table->foreign('nilaiketerlambatan_id')->references('id')->on('nilaiketerlambatan')->onDelete('cascade');

            $table->bigInteger('nilaihafalan_id')->index()->unsigned()->nullable();
            $table->foreign('nilaihafalan_id')->references('id')->on('nilaihafalan')->onDelete('cascade');

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
        Schema::dropIfExists('nilai_semua_kriterias');
    }
};
