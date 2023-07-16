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
        Schema::create('jemaats', function (Blueprint $table) {
            $table->bigIncrements('jemaatid'); // jemaat id nya
            $table->string('jemaatfname',255); // Nama depan jemaat
            $table->string('jemaatlname',255); // marga jemaat
            $table->string('jemaataddress',255); // alamat dari jemaat
            $table->integer('jemaatzone'); // wilayah jemaat
            $table->char('genderid',5); // gender jemaat di ambil dari table gender
            $table->string('jemaatPOB',255); // tempat lahir jamaat
            $table->date('jemaatDOB'); // tanggal lahir jemaat
            $table->string('jemaatphone'); // nomor ponsel jemaat
            $table->char('relationshipid',5); // status hubungan
            $table->char('statusid',5); // status jemaat
            $table->char('positionid',5); // posisi jemaat digereja

            $table->timestamps(); // kapan akun di buat atau diperbaharui

            // mereferences ke table msgender
            $table->foreign('genderid')->references('genderid')->on('ms_genders')->onDelete('cascade')->onUpdate('cascade');

            // mereferences ke table relationship
            $table->foreign('relationshipid')->references('relationshipid')->on('ms_relationships')->onDelete('cascade')->onUpdate('cascade');

            // mereferences ke table status
            $table->foreign('statusid')->references('statusid')->on('ms_statuses')->onDelete('cascade')->onUpdate('cascade');

            // mereferences ke table status
            $table->foreign('positionid')->references('positionid')->on('ms_positions')->onDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jemaats');
    }
};
