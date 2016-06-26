<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGuru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('guru', function (Blueprint $table) {
            $table->increments('id'); //int unsigned() //1
            $table->char('nik',16);//2
            $table->string('status_kepegawaian',30);//3
            $table->string('jabatan',30);//4
            $table->string('tugas_tambahan',40);//5
            $table->string('sk_pengangkatan',30);//6
            $table->Date('tahun_pengangkatan');//7
            $table->string('lembaga_pengangkatan',25);//8
            $table->string('sumber_gaji',25);//9
            $table->string('status_perkawinan',12);//10
            $table->string('nama_suami',35);//11
            $table->string('nama_istri',35);//12
            $table->tinyInteger('status_walikelas');//13

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
         Schema::drop('guru');
    }
}
