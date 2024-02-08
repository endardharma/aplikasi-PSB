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
        Schema::create('masterguru', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nama_guru');
            $table->enum('jenkel',['L','P'])->default('L');
            $table->enum('status_pegawai',['Aktif', 'Non-Aktif'])->default('Aktif');
            $table->foreign('jabatan')->references('id')->on('roles');
            $table->unsignedBigInteger('jabatan')->nullable();
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('masterguru');
    }
};
