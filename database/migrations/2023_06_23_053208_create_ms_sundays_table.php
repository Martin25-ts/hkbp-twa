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
        Schema::create('ms_sundays', function (Blueprint $table) {
            $table->bigIncrements('sundayid');
            $table->unsignedBigInteger('accountid');
            $table->date('sundaydate');
            $table->string('sundaythumbnail',255);
            $table->string('sundayagenda',255);
            $table->string('sundaywarta',255);
            $table->string('sundaylive',255);
            $table->string('sundaydescription',255);
            $table->timestamps();


            $table->foreign('accountid')->references('accountid')->on('ms_accounts')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ms_sundays');
    }
};
