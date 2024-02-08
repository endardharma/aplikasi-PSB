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
        Schema::create('kelas_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 15)->index()->nullable();
            $table->foreign('nis')->references('nis')->on('mastersiswa')->onDelete('cascade');
            $table->bigInteger('kelas_id')->index()->unsigned()->nullable();
            $table->foreign('kelas_id')->references('id')->on('master_kelas')->onDelete('cascade');
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
        Schema::dropIfExists('kelas_siswas');
    }
};
