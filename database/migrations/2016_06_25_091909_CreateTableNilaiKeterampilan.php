<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNilaiKeterampilan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('nilai_keterampilan', function (Blueprint $table) {
            $table->increments('id'); //int unsigned() //1
            $table->tinyInteger('npra1');
            $table->tinyInteger('npra2');
            $table->tinyInteger('npra3');
            $table->tinyInteger('npra4');
            $table->tinyInteger('npra5');
            $table->tinyInteger('npra6');
            $table->tinyInteger('npra7');
            $table->tinyInteger('npra8');
            $table->tinyInteger('nproy');
            $table->tinyInteger('nport');
            $table->unsignedInteger('guru_id');
            $table->unsignedInteger('siswa_id');
            $table->unsignedInteger('mapel_id');
            $table->softDeletes();
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
        //
        Schema::drop('nilai_keterampilan');
    }
}
