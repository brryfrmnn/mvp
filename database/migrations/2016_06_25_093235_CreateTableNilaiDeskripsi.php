<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNilaiDeskripsi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('nilai_deskripsi', function (Blueprint $table) {
            $table->increments('id'); //int unsigned() //1
            $table->string('kode',15);
            $table->string('varchar',150);
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
        Schema::drop('nilai_deskripsi');
    }
}
