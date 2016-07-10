<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalPelajaran extends Model
{
    //
    use SoftDeletes;
    protected $fillabel = [

 
    	'user_id',
    	'mapel_id',
    	'admin_id'

    ];

    protected $table = 'jadwal_pelajaran';

    public function user()
    {

    	//ga ngerti yang ini mah
    }
}
