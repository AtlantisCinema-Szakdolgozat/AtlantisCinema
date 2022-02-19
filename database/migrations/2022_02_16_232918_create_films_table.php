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
            $table->string('filmLeiras',50);
            $table->string('hossz',50);
            $table->string('nyelv',10);
            $table->string('poszter',50);
            $table->string('youtubeLink',100);
            $table->integer('mufajID')->unsigned();
            
            $table->foreign('mufajID')->references('mufajID')->on('mufajs');

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
