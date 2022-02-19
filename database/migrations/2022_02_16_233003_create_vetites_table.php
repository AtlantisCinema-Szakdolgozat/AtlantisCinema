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
        Schema::create('vetites', function (Blueprint $table) {
            $table->increments('vetitesId');
            $table->integer('teremId')->unsigned();
            $table->integer('filmID')->unsigned();
            $table->boolean('felirat');
            $table->boolean('szinkron');
            $table->date('vetitesNap');
            $table->time('kezdesiIdo');
            $table->integer('teljesJegyar');
            $table->date('premier');
            $table->boolean('publikus');

            $table->foreign('teremId')->references('teremId')->on('terems');
            $table->foreign('filmID')->references('filmID')->on('films');

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
        Schema::dropIfExists('vetites');
    }
};
