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
            $table->bigInteger('user_id')->index()->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nama_mapel');
            $table->string('kelompok_mapel'); // Kelompok A/B/C
            $table->string('nama_nilai'); // Pengetahuan/Keterampilan
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
