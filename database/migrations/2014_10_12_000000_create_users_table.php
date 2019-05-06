<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table ->string('location')->nullable();
            $table ->string('NIC_NO')->unique()->nullable(); 
            $table ->integer('Mobile_Number')->unique()->nullable();
            $table ->string('Sex')->nullable();
            $table ->string('Position')->default('User');
            $table ->string('Block')->default(0);
            $table ->text('Description')->nullable();
            $table ->date('DOB')->nullable();
            $table ->text('Address')->nullable();
            $table ->string('ProfilePicture')->default('person_4.jpg');
            $table ->string('Jobphoto')->default('person_3.jpg');
         
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
        Schema::dropIfExists('users');
    }
}
