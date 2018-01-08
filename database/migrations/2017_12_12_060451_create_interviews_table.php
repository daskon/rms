<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('candidate_id')->unsigned();
            $table->integer('employer_id')->unsigned();
            $table->string('hiring_manager',30);
            $table->string('PostOf',30);
            $table->dateTime('DateTime');
            $table->string('Link',120)->unique();
            $table->string('Status',30)->default('ongoing');
            $table->string('Comment',255);

            $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->foreign('employer_id')->references('id')->on('employers');
            $table->timestamps();
        });

        Schema::table('interviews', function($table){
            $table->index(['PostOf', 'Status', 'DateTime']);
        }) ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interviews');
    }
}
