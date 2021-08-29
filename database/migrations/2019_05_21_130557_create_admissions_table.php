<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Admissions;
class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('adm');
            $table->bigInteger('indexno')->length(11);
            $table->integer('feyear')->length(4);
            $table->string('fullname');
            $table->string('mobile'); 
            $table->string('email');  
            $table->string('address');
            $table->string('course');
            $table->string('level'); 
            $table->boolean('form_generated');        
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
        Schema::dropIfExists('admission');
    }
}
