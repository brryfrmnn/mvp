<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiSikap extends Model
{
    //
    use SoftDeletes;
    protected $fillabel = [

    	'nob1',
    	'nob2',
    	'nob3',
    	'nob4',
    	'nob5',
    	'nob6',
    	'nob7',
    	'nob8',
    	'nob9',
    	'nob10',
    	'nob11',
    	'nob12',
    	'nds',
    	'nat',
    	'nj',
    	'guru_id',
    	'siswa_id',
    	'mapel_id'
    	
    ];

    protected $table = 'nilai_sikap';

    public function user()
    {

    	//ga ngerti yang ini mah
    }
}
