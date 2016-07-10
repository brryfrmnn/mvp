<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelasJurusan extends Model
{
    //
    use SoftDeletes;
    protected $fillabel = [

    	
    	'kelas_id',
    	'jurusan_id',

    ];

    protected $table = 'kelas_jurusan';

    public function user()
    {

    	//ga ngerti yang ini mah
    }
}
