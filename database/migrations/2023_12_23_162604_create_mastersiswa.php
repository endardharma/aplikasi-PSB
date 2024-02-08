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
        Schema::create('mastersiswa', function (Blueprint $table) {
            $table->string('nis', 15)->primary();
            $table->bigInteger('user_id')->index()->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nik', 18)->unique();
            $table->string('nisn', 15)->unique();
            $table->string('nama_siswa');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->enum('jenkel',['L','P'])->default('L');
            $table->string('agama');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('alamat');
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
        Schema::dropIfExists('mastersiswa');
    }
};
