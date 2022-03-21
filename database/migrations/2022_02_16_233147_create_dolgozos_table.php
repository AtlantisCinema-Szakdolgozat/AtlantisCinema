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
        Schema::create('dolgozos', function (Blueprint $table) {
            $table->increments('dolgozoId');
            $table->string('nev',50);
            $table->string('email',200);
            $table->timestamp('email_verified_at');
            $table->string('jelszo',255);
            $table->string('remember_token',100)->nullable();
            $table->string('munkakor',50);
            
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
        Schema::dropIfExists('dolgozos');
    }
};
