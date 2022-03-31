<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mufajs', function (Blueprint $table) {
            $table->increments('mufajId');
            $table->string('mufaj',50);
            
            $table->timestamps();
        });
        DB::table('mufajs')->insert([
            ['mufaj' => 'Akció'],
            ['mufaj' => 'Dokumentum'],
            ['mufaj' => 'Dráma'],
            ['mufaj' => 'Családi'],
            ['mufaj' => 'Életrajzi'],
            ['mufaj' => 'Fantasy'],
            ['mufaj' => 'Horror'],      
            ['mufaj' => 'Kaland'],
            ['mufaj' => 'Kém'],
            ['mufaj' => 'Sci-fi'],
            ['mufaj' => 'Thriller'],
            ['mufaj' => 'Western']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mufajs');
    }
};
