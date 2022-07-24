<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionsTable extends Migration
{
    public function up()
    {
        
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('Adm');
            $table->bigInteger('IndexNumber')->length(11);
            $table->integer('Year')->length(4);
            $table->string('StudentName')->length(50);
            $table->string('Gender')->length(6);
            $table->string('Phone')->default('None');
            $table->string('AltPhone')->default('None');
            $table->string('Email')->default('None');
            $table->string('AltEmail')->default('None');
            $table->string('Address')->default('None');
            $table->string('Course')->length(100);
            $table->string('Level')->length(20);
            $table->boolean('FormGenerated')->default(0);
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
        Schema::dropIfExists('admissions');

    }
}
