<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('adm')->unique();  
            $table->string('fullname'); 
            $table->string('dept'); 
            $table->string('course');  
            $table->string('level');  
            $table->string('feyear'); 
            $table->string('feser'); 
            $table->string('trans'); 
            $table->string('serial'); 
            $table->string('idnum')->unique(); 
            $table->string('current_address');  
            $table->string('permanent_address');
            $table->string('email')->unique();
            $table->string('mobile')->unique(); 
            $table->string('occupation'); 
            $table->string('occupation_place'); 
            $table->string('nextofkin'); 
            $table->string('nextofkinadd'); 
            $table->string('nextofkinphone'); 
            $table->string('placeofworkadd'); 
            $table->string('supervisoradd'); 
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
        Schema::dropIfExists('alumnis');
    }
}
