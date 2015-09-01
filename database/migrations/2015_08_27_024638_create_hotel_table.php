<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel', function (Blueprint $table) { 
            $table->string('rif');
            $table->string('nombre');
            $table->string('telefono1', 20)->unique();
            $table->string('telefono2', 20)->unique();
            $table->text('direccion');
            $table->string('ubicacion');
            $table->integer('estrellas'); 
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password', 60); 
            $table->string('web', 60);
            $table->string('imagen', 50);
            $table->rememberToken();
            $table->timestamps(); 
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    { 
        Schema::drop('hotel');
    }
}
