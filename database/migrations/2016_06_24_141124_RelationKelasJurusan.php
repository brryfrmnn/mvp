<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationKelasJurusan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('kelas_jurusan', function($table) {
            $table->foreign('kelas_id')->references('id')->on('kelas');
            $table->foreign('jurusan_id')->references('id')->on('jurusan');
        //fk, referensi field, nama tabel
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
        Schema::table('kelas_jurusan', function($table) {
            $table->dropForeign('kelas_jurusan_kelas_id_foreign');
            $table->dropForeign('kelas_jurusan_jurusan_id_foreign');
            //nama tabel/field fk/foreign
        });
    }
}
