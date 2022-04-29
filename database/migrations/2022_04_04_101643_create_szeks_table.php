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
        Schema::create('szeks', function (Blueprint $table) {
            $table->integer('sor');
            $table->integer('oszlop');
            $table->integer('vetitesId')->unsigned();

            $table->primary(['sor', 'oszlop','vetitesId']);
            $table->integer('nezoId')->unsigned()->nullable();
            $table->integer('kedvezmenyId')->unsigned()->nullable();
            $table->dateTime('elevesztesIdopont')->nullable();
            $table->boolean('allapot')->nullable();

            $table->foreign('vetitesId')->references('vetitesId')->on('vetites');
            $table->foreign('nezoId')->references('nezoId')->on('nezos');
            $table->foreign('kedvezmenyId')->references('kedvezmenyId')->on('kedvezmenies');

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
        Schema::dropIfExists('szeks');
    }
};
