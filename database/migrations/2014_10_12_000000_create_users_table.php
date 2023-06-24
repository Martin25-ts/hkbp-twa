<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MsUsers', function (Blueprint $table) {
            $table->bigIncrements('userid'); // user id for MsUser
            $table->string('userfname',255); // FirstName For user
            $table->string('userlname',255); // LastName For User
            $table->string('useraddress',255); // Address For user
            $table->integer('userzone'); // user zone 1 - 12
            $table->char('genderid',5); // Gender Id refrences to MsGender
            $table->string('userPOB',255); // user place of birth
            $table->date('userDOB'); // user date of birth
            $table->string('userphone'); // user phone number using string and must validate
            $table->char('relationshipid',5); // relation ship married,single,divorce, ect
            $table->char('statusid',5); // status of user on,susspend or ect

            $table->timestamps(); // timestamps of making this account


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MsUsers');
    }
};
