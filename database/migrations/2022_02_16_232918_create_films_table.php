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
        Schema::create('films', function (Blueprint $table) {
            $table->increments('filmId');
            $table->string('cim',50);
            $table->string('filmLeiras',500);
            $table->integer('hossz');
            $table->string('nyelv',10);
            $table->string('poszter',50);
            $table->string('youtubeLink',100);
            $table->integer('mufajId')->unsigned();
            
            $table->foreign('mufajId')->references('mufajId')->on('mufajs');

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
        Schema::dropIfExists('films');
    }
};
