<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Jurusan extends Model
{
    //
    
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
