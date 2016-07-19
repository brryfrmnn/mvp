<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableSiswaMakeNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->string('nama_ayah',35)->nullable()->change();//5
            $table->string('nama_ibu',35)->nullable()->change();//6
            $table->string('alat_transportasi',15)->nullable()->change();//7
            $table->unsignedInteger('penghasilan_orangtua')->nullable()->change();//8
            $table->text('alamat_orangtua')->nullable()->change();//9
            $table->string('pekerjaan_ayah',50)->nullable()->change();//10
            $table->string('pekerjaan_ibu',50)->nullable()->change();//11
            $table->unsignedInteger('kelas_jurusan_id')->nullable()->change();//11
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
