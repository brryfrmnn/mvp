<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Siswa extends Model
{
    //
        protected $fillabel = [

    	
    	'semester',
    	'tahun_ajaran',
    	'jenis_tinggal',
    	'nama_ayah',
    	'nama_ibu',
    	'alat_transportasi',
    	'penghasilan_ortu',
    	'alamat_ortu',
    	'pekerjaan_ayah',
    	'pekerjaan_ibu',
    	'kelasjurusan_id'
    	
    ];

    protected $table = 'siswa';

   
}
