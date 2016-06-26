<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMapel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mapel', function (Blueprint $table) {
            $table->increments('id'); //int unsigned()
            $table->string('nama',50);
            $table->string('kategori',2);
            $table->unsignedInteger('admin_id');
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
        Schema::drop('mapel');
    }
}
