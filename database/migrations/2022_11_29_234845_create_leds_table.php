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
        Schema::create('leds', function (Blueprint $table) {
            $table->id();
            $table->string('id_pengajuan')->unique();
            $table->string('id_led')->unique();
            $table->text('a1')->nullable();
            $table->text('b1')->nullable();
            $table->text('b2')->nullable();
            $table->text('b3')->nullable();
            $table->text('b4')->nullable();
            $table->text('b5')->nullable();
            $table->text('b6')->nullable();
            $table->text('b7')->nullable();
            $table->text('b8')->nullable();
            $table->text('c1')->nullable();
            $table->text('c2')->nullable();
            $table->text('c3')->nullable();
            $table->text('c4')->nullable();
            $table->text('c5')->nullable();
            $table->text('c6')->nullable();
            $table->text('c7')->nullable();
            $table->text('c8')->nullable();
            $table->text('c9')->nullable();
            $table->text('d1')->nullable();
            $table->text('d2')->nullable();
            $table->text('d3')->nullable();
            $table->text('d4')->nullable();
            $table->text('e1')->nullable();
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
        Schema::dropIfExists('leds');
    }
};
