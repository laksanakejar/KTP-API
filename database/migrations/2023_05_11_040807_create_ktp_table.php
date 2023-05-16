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
        Schema::create('ktp', function (Blueprint $table) {
            $table->id();
            $table->char('nik')->unique();
            $table->string('nama');
            $table->string('tmplahir');
            $table->date('tgllahir');
            $table->char('kelamin',1);
            $table->text('alamat');
            $table->char('rt');
            $table->char('rw');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('agama');
            $table->string('nikah',1);
            $table->string('pekerjaan');
            $table->char('warga',3);
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
        Schema::dropIfExists('ktp');
    }
};
