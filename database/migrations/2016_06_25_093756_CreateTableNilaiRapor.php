<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNilaiRapor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('nilai_rapor', function (Blueprint $table) {
            $table->increments('id'); //int unsigned() //1
            $table->unsignedInteger('nilai_pengetahuan_id');
            $table->unsignedInteger('nilai_keterampilan_id');
            $table->unsignedInteger('nilai_sikap_id');
            $table->unsignedInteger('deskripsi_id');
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
        Schema::drop('nilai_rapor');
    }
}
