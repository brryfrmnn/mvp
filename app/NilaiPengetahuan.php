<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class NilaiPengetahuan extends Model
{
    //
    
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

    public function nilaiRapor() //relasi rapor dengan nilaipengetahuan 
    {
        return $this->hasOne('App\NilaiRapor', 'pengetahuan_id','id');
    }
    
}
