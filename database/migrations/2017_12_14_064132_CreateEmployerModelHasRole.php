<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployerModelHasRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('model_has_roles', function (Blueprint $table) {
//            $table->foreign('model_id')
//                ->references('id')
//                ->on('candidates');
//        });
//
//        Schema::table('model_has_permissions', function (Blueprint $table) {
//            $table->foreign('model_id')
//                ->references('id')
//                ->on('candidates');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
