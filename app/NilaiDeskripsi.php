<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiDeskripsi extends Model
{
    //
    use SoftDeletes;
    protected $fillabel = [

    	'kode',
    	'nama',
    	'guru_id',
    	'siswa_id',
    	'mapel_id'
    	
    ];

    protected $table = 'nilai_deskripsi';

    public function user()
    {

    	//ga ngerti yang ini mah
    }
}
