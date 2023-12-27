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
        if(!Schema::hasTable('masterguru')){
            Schema::create('masterguru', function (Blueprint $table) {
                $table->id();
                $table->string('nip');
                $table->string('nama_guru');
                $table->enum('jenkel',['L','P'])->default('L');
                $table->enum('status_pegawai',['Aktif', 'Non-Aktif'])->default('Aktif');
                $table->string('jabatan');
                $table->boolean('is_active')->default(true);
                $table->string('email')->unique();
                $table->string('password');
                $table->timestamps();
            });
        }
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
