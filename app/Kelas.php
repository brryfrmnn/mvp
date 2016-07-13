<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Kelas extends Model
{
    //
    
    protected $fillabel = [

    	
    	'nama',
    	'kode'

    ];

    protected $table = 'kelas';

    public function user()
    {

    	//ga ngerti yang ini mah
    }
}
