<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminUserId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin', function($table) {
            $table->unsignedInteger('user_id');
        });
        Schema::table('siswa', function($table) {
            $table->unsignedInteger('user_id');
        });
        Schema::table('guru', function($table) {
            $table->unsignedInteger('user_id');
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
