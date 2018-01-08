<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('candidate_id')->unsigned();
            $table->string('JobType');
            $table->string('CurrentIndustry');
            $table->string('CurrentLevel');
            $table->string('FunctionalArea');
            $table->string('Specialization');
            $table->string('KeySkills');
            $table->string('Experience');
            $table->string('CurrentEmployer');
            $table->string('PreviousEmployer');
            $table->string('CurrentMonthSal');
            $table->string('HighestQua');
            $table->string('AreaOfSt');
            $table->string('Institution');
            $table->string('Completed');
            $table->date('Availability');
            $table->string('Attachment');

            $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->timestamps();
        });

        Schema::table('resumes', function($table){
            $table->index([ 'KeySkills', 'Institution']);
        }) ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumes');
    }
}
