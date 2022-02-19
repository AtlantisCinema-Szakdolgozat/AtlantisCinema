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
        Schema::create('film__szemelies', function (Blueprint $table) {
            $table->integer('filmId')->unsigned();
            $table->integer('szemelyId')->unsigned();

            $table->primary(['filmId', 'szemelyId']);
            $table->string('poszt',50);

            $table->foreign('filmId')->references('filmId')->on('films');
            $table->foreign('szemelyId')->references('szemelyId')->on('szemelies');

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
        Schema::dropIfExists('film__szemelies');
    }
};
