<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Migrations\User;
class Jobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Jobs',function(Blueprint $table){
             
            $table->increments('ID');
            $table->integer('User_ID');
            $table->String('Event');
            $table ->date('In_Date')->nullable();
            $table ->date('Out_Date')->nullable();
            $table ->Integer('Per_Day_Payment');
            $table ->Integer('quantity');
            $table ->String('Location')->nullable();
            $table ->String('Discription');
            // $table -> foreign('User_ID')
            //        -> references('id')->on('users')
            //        -> onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Shema::drop('Jobs');
    }
}
