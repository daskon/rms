<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShortListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('short_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id')->unsigned();
            $table->integer('interview_id')->unsigned();
            $table->integer('candidate_id')->unsigned();
            $table->string('result');

            $table->foreign('employer_id')->references('id')->on('employers');
            $table->foreign('interview_id')->references('id')->on('interviews');
            $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->timestamps();
        });

        Schema::table('short_lists', function($table){
            $table->index(['result']);
        }) ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('short_lists');
    }
}
