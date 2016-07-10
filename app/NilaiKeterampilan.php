<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiKeterampilan extends Model
{
    //
    use SoftDeletes;
    protected $fillabel = [

    	'npra1',
    	'npra2',
    	'npra3',
    	'npra4',
    	'npra5',
    	'npra6',
    	'npra7',
    	'npra8',
    	'nproy',
    	'nport',
    	'guru_id',
    	'siswa_id',
    	'mapel_id'
    	
    ];

    protected $table = 'nilai_keterampilan';

    public function nilaiRapor()  
    {
        return $this->hasOne('App\NilaiRapor', 'keterampilan_id','id');
    }
}
