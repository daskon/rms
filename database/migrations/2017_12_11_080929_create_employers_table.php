<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CompanyName',50);
            $table->string('CompanyType');
            $table->string('CPerson',30);
            $table->string('Designation');
            $table->string('AccountName',12)->unique();
            $table->string('Password',255);
            $table->integer('OfficeNo')->unique();
            $table->integer('MobileNo')->unique();
            $table->integer('FaxNo')->unique();
            $table->string('EmailId',30)->unique();
            $table->string('CRNo',30)->unique();
            $table->string('MailboxNo',10)->unique();
            $table->string('StreetName',50);
            $table->string('City',15);
            $table->timestamps();
        });

        Schema::table('employers', function($table){
            $table->index(['EmailId', 'MobileNo', 'CRNo']);
        }) ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employers');
    }
}
