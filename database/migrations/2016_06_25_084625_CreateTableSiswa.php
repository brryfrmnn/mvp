<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('id'); //int unsigned() //1
            $table->char('semester',1);//2
            $table->string('tahun_ajar',10);//3
            $table->string('jenis_tinggal',25);//4
            $table->string('nama_ayah',35);//5
            $table->string('nama_ibu',35);//6
            $table->string('alat_transportasi',15);//7
            $table->unsignedInteger('penghasilan_orangtua');//8
            $table->text('alamat_orangtua');//9
            $table->string('pekerjaan_ayah',50);//10
            $table->string('pekerjaan_ibu',50);//11
            $table->unsignedInteger('kelas_jurusan_id');//11
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
        Schema::drop('siswa');
    }
}
