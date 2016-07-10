<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    //
    use SoftDeletes;
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
