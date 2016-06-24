<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKelasJurusan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('kelas_jurusan', function (Blueprint $table) {
            $table->increments('id'); //int unsigned()
            $table->unsignedInteger('kelas_id');
            $table->unsignedInteger('jurusan_id');
            $table->softDeletes();
            $table->timestamps();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('kelas_jurusan');
    }
}
