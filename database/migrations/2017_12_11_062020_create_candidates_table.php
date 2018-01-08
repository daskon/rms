<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FullName',50);
            $table->string('AccountName',12)->unique();
            $table->string('image',200);
            $table->string('Password',255);
            $table->char('Sex');
            $table->integer('HomeNo')->nullable()->unique();
            $table->integer('MobileNo')->unique();
            $table->string('EmailId',40)->unique();
            $table->string('NIC',12)->unique();
            $table->mediumInteger('PassportNo')->nullable()->unique();
            $table->string('HouseNo',10)->unique();
            $table->string('StreetName',50);
            $table->string('City',15);
            $table->string('GSDivision',30);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('candidates', function($table){
            $table->index(['EmailId', 'MobileNo', 'NIC', 'City', 'GSDivision']);
        }) ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
