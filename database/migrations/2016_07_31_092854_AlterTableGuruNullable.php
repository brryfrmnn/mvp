<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableGuruNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('guru', function (Blueprint $table) {
            $table->string('nip',16)->nullable()->change();//2
            $table->string('status_kepegawaian',30)->nullable()->change();//3
            $table->string('jabatan',30)->nullable()->change();//4
            $table->string('tugas_tambahan',40)->nullable()->change();//5
            $table->string('sk_pengangkatan',30)->nullable()->change();//6
            $table->Date('tahun_pengangkatan')->nullable()->change();//7
            $table->string('lembaga_pengangkatan',25)->nullable()->change();//8
            $table->string('sumber_gaji',25)->nullable()->change();//9
            $table->string('status_perkawinan',12)->nullable()->change();//10
            $table->string('nama_suami',35)->nullable()->change();//11
            $table->string('nama_istri',35)->nullable()->change();//12
            $table->dropColumn('status_walikelas');//13
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
