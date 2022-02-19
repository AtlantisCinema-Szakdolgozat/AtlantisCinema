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
        Schema::create('kedvezmenies', function (Blueprint $table) {
            $table->increments('kedvezmenyId');
            $table->string('tipus',50);
            $table->integer('szazalek');
            $table->string('leiras',300);
            
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
        Schema::dropIfExists('kedvezmenies');
    }
};
