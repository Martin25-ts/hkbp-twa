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
        Schema::create('beritas', function (Blueprint $table) {
            $table->bigIncrements('beritaid'); // setiap id untuk berita
            $table->unsignedBigInteger('userid'); // user yang membuat thread
            $table->string('beritaimage',255); // url / path image
            $table->string('beritatitle',255); // judul berita
            $table->string('beritadeskripsi'); // deskripsi utnuk berita
            $table->timestamps(); // waktu pembuatan dan update

            // mereferces ke table users untuk mengatahui siapa yang membuat thread berita ini
            $table->foreign('userid')->references('userid')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beritas');
    }
};
