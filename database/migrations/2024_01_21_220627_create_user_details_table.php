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
        Schema::create('user_details', function (Blueprint $table) {
            $table->string('nip', 15)->primary();
            $table->bigInteger('user_id')->index()->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->enum('jenkel',['L','P'])->default('L');
            $table->date('tgl_lahir');
            $table->string('no_telp');
            $table->string('alamat');
            $table->enum('status_user',['Aktif', 'Non-Aktif'])->default('Aktif');
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
        Schema::dropIfExists('user_details');
    }
};
