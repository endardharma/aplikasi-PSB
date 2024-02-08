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
        Schema::create('nilairaport', function (Blueprint $table) {
            $table->id();
            $table->string('nis')->index()->nullable();
            $table->foreign('nis')->references('nis')->on('mastersiswa')->onDelete('cascade');
            $table->bigInteger('kelas_id')->index()->unsigned()->nullable();
            $table->foreign('kelas_id')->references('id')->on('master_kelas')->onDelete('cascade');

            $table->double('png_pai');
            $table->double('png_ppkn');
            $table->double('png_bind');
            $table->double('png_mtk_umum');
            $table->double('png_sjr_indo');
            $table->double('png_bing');
            $table->double('png_senbud');
            $table->double('png_penjaskes');
            $table->double('png_pkwu');
            $table->double('png_bhs_daerah');
            $table->double('png_mtk_peminatan');
            $table->double('png_fisika');
            $table->double('png_kimia');
            $table->double('png_biologi');
            $table->double('png_fiqih');
            $table->double('png_bhs_arab');
            $table->double('png_conversation');
            $table->double('png_ekonomi');

            $table->double('ktr_pai');
            $table->double('ktr_ppkn');
            $table->double('ktr_bind');
            $table->double('ktr_mtk_umum');
            $table->double('ktr_sjr_indo');
            $table->double('ktr_bing');
            $table->double('ktr_senbud');
            $table->double('ktr_penjaskes');
            $table->double('ktr_pkwu');
            $table->double('ktr_bhs_daerah');
            $table->double('ktr_mtk_peminatan');
            $table->double('ktr_fisika');
            $table->double('ktr_kimia');
            $table->double('ktr_biologi');
            $table->double('ktr_fiqih');
            $table->double('ktr_bhs_arab');
            $table->double('ktr_conversation');
            $table->double('ktr_ekonomi');

            $table->double('nilai_pengetahuan');
            $table->double('nilai_keterampilan');
            $table->double('nilai_raport');

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
        Schema::dropIfExists('nilairaport');
    }
};
