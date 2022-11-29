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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('program');
            $table->string('nama_program_studi');
            $table->string('alamat');
            $table->string('kota');
            $table->string('nama_unit_pengelolah');
            $table->string('nama_perguruan_tinggi');
            $table->string('no_telepon_pt');
            $table->string('alamat_email_pt');
            $table->string('alamat_website_pt');
            $table->string('ts');
            $table->string('nama_narahubung');
            $table->string('telepon_seluler');
            $table->string('id_acesor1')->nullable();
            $table->string('status_acesor1')->nullable();
            $table->string('id_acesor2')->nullable();
            $table->string('status_acesor2')->nullable();
            $table->string('tolak')->nullable();
            $table->string('id_user');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('pengajuans');
    }
};
