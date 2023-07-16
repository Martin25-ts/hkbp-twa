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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('userid'); // indexing untuk user
            $table->unsignedBigInteger('jemaatid'); // mengetahui jemaat yang memiliki jemaat
            $table->string('useremail')->unique(); // email yang dimiliki user
            $table->string('userpassword')->nullable(); // password yang dimiliki user
            $table->char('roleid',5); // roleid agar tau hak akses
            $table->string('remember_token',255)->nullable(); // menyimpan remembertoken saat login dan logout
            $table->timestamps(); // menyimpan perubahan akun saat dibuat dan di update


            // merefrence ke jemaat untuk negliat izin masuk status
            $table->foreign('jemaatid')->references('jemaatid')->on('jemaats')->onDelete('cascade')->onUpdate('cascade');

            // merefrence ke roleid agar mengetahui hak update
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
        Schema::dropIfExists('users');
    }
};
