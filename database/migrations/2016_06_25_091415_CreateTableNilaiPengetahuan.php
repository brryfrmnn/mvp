<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNilaiPengetahuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('nilai_pengetahuan', function (Blueprint $table) {
            $table->increments('id'); //int unsigned() //1
            $table->tinyInteger('nuh1');
            $table->tinyInteger('nuh2');
            $table->tinyInteger('nuh3');
            $table->tinyInteger('nuh4');
            $table->tinyInteger('nuts');
            $table->tinyInteger('nuas');
            $table->unsignedInteger('guru_id');
            $table->unsignedInteger('siswa_id');
            $table->unsignedInteger('mapel_id');
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
        Schema::drop('nilai_pengetahuan');
    }
}
