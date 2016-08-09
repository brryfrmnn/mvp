<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableJadwalPelajaranAddTahunAjar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jadwal_pelajaran', function (Blueprint $table) {
            //
            $table->string('tahun_ajaran',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jadwal_pelajaran', function (Blueprint $table) {
            //
        });
    }
}
