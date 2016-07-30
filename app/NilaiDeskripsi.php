<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class NilaiDeskripsi extends Model
{
    //
    
    protected $fillabel = [

    	'kode',
    	'nama',
    	'guru_id',
    	'siswa_id',
    	'mapel_id'
    	
    ];

    protected $table = 'nilai_deskripsi';


    public function nilaiRapor()  
    {
        return $this->hasOne('App\NilaiRapor', 'deskripsi_id','id');
    }
}
