<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJadwalPelajaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('jadwal_pelajaran', function (Blueprint $table) {
            $table->increments('id'); //int unsigned()
            $table->unsignedInteger('mapel_id');
            $table->unsignedInteger('admin_id');
            $table->unsignedInteger('user_id');
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
        Schema::drop('jadwal_pelajaran');
    }
}
