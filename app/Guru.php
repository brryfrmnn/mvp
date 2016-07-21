<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Guru extends Model
{
    //
    
    protected $fillabel = [

    	
    	'nik',
    	'status_kepegawaian',
    	'jabatan',
    	'tugas_tambahan',
    	'sk_pengangkatan',
    	'tahun_pengangkatan',
    	'lembaga_pengangkatan',
    	'sumber_gaji',
    	'status_perkawinan',
    	'nama_suami',
    	'nama_istri',
    	'status_walikelas'

    ];

    protected $table = 'guru';

    
}
