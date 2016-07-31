<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableSiswaNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa', function (Blueprint $table) {
            //
            $table->string('semester',1)->nullable()->change();//2
            $table->string('tahun_ajar',10)->nullable()->change();//3
            $table->string('jenis_tinggal',25)->nullable()->change();//4
            $table->string('nama_ayah',35)->nullable()->change();//5
            $table->string('nama_ibu',35)->nullable()->change();//6
            $table->string('alat_transportasi',15)->nullable()->change();//7
            $table->unsignedInteger('penghasilan_orangtua')->nullable()->change();//8
            $table->text('alamat_orangtua')->nullable()->change();//9
            $table->string('pekerjaan_ayah',50)->nullable()->change();//10
            $table->string('pekerjaan_ibu',50)->nullable()->change();//11
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('siswa', function (Blueprint $table) {
            //
        });
    }
}
