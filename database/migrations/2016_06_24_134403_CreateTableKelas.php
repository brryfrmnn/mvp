<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('kelas', function (Blueprint $table) {
            $table->increments('id'); //int unsigned()
            $table->string('nama',4);
            $table->tinyInteger('kode');
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
        Schema::drop('kelas');

    }
}
