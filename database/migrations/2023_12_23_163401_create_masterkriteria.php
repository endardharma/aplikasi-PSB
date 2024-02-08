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
        Schema::create('masterkriteria', function (Blueprint $table) {
            $table->string('kode_kriteria', 5)->primary();
            $table->bigInteger('user_id')->index()->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nama_kriteria');
            $table->float('bobot_kriteria')->default(0);
            $table->string('atribut_kriteria');
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
        Schema::dropIfExists('masterkriteria');
    }
};
