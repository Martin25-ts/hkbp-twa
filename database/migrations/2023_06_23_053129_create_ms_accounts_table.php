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
        Schema::create('ms_accounts', function (Blueprint $table) {
            $table->bigIncrements('accountid');
            $table->unsignedBigInteger('userid');
            $table->string('emailaccount',255)->unique();
            $table->string('passwordaccount',255);
            $table->char('roleid',5);
            $table->string('remember_token', 100)->nullable(); // defautl rember token
            $table->timestamps();




            $table->foreign('userid')->references('userid')->on('MsUsers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('roleid')->references('roleid')->on('ms_roles')->onDelete('cascade')->onUpdate('cascade');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ms_accounts');
    }
};
