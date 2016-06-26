<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNilaiSikap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('nilai_sikap', function (Blueprint $table) {
            $table->increments('id'); //int unsigned() //1
            $table->float('nob1');
            $table->float('nob2');
            $table->float('nob3');
            $table->float('nob4');
            $table->float('nob5');
            $table->float('nob6');
            $table->float('nob7');
            $table->float('nob8');
            $table->float('nob9');
            $table->float('nob10');
            $table->float('nob11');
            $table->float('nob12');
            $table->float('nds');
            $table->float('nat');
            $table->float('nj');
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
        Schema::drop('nilai_sikap');
    }
}
