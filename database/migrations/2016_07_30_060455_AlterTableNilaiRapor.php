<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableNilaiRapor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('nilai_rapor', function (Blueprint $table) {
                $table->tinyInteger('angka_pengetahuan_puluhan')->unsigned();
                $table->tinyInteger('angka_keterampilan_puluhan')->unsigned();
                $table->tinyInteger('angka_sikap_puluhan')->unsigned();
                $table->float('angka_pengetahuan');
                $table->float('angka_keterampilan');
                $table->float('angka_sikap');
                $table->string('predikat_pengetahuan')->nullable();
                $table->string('predikat_keterampilan')->nullable();
                $table->string('predikat_sikap')->nullable();
                $table->string('antar_mapel')->nullable();
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
    }
}
