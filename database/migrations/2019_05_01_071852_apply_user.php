<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ApplyUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('JobApplyUsers',function(Blueprint $table){
        $table->increments('ID');
        $table->integer('User_ID');
        $table->integer('Job_ID');
        $table ->Integer('ConfirmJobs')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Shema::drop('ApplyUser');
    }
}
