<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    use SoftDeletes;
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

    protected $table = 'admin';

    public function user()
    {

    	
    }
}
