<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiPengetahuan extends Model
{
    //
    use SoftDeletes;
    protected $fillabel = [

    
    	'nuh1',
    	'nuh2',
    	'nuh3',
    	'nuh4',
    	'nuts',
    	'nuas',
    	'guru_id',
    	'siswa_id',
    	'mapel_id'
    	
    ];

    protected $table = 'nilai_pengetahuan';

    public function user()
    {

    	//ga ngerti yang ini mah
    }
}
