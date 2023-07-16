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
        Schema::create('sundays', function (Blueprint $table) {

            $table->bigIncrements('sundayid'); // menyimapan id untuk data minggu
            $table->unsignedBigInteger('userid'); // menyimpan data untuk user yang membaut thread minggu
            $table->date('sundaydate'); // tanggal dari minggu
            $table->string('sundaythumbnail',255); // path gambar untuk thumbnail minggu
            $table->string('sundayagenda',255); // path file acara harus pdf
            $table->string('sundaywarta',255); // path file warta harus pdf
            $table->string('sundaylive',255); // link url youtube live streaming
            $table->string('sundaydescription',255); // deskripsi dari minggu nya
            $table->timestamps(); // waktu dibuat dan di update untuk datanya

            // mereference ke user yang membuat thread minggu
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
        Schema::dropIfExists('sundays');
    }
};
