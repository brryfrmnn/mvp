<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    //
    use SoftDeletes;
    protected $fillabel = [

    	
    	'nama',
    	'kode'

    ];

    protected $table = 'jurusan';

    public function user()
    {

    	//ga ngerti yang ini mah
    }
}
