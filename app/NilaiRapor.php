<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiRapor extends Model
{
    //
    protected $fillabel = [

    	
    	'pengetahuan_id',
    	'keterampilan_id',
    	'sikap_id',
    	'deskripsi_id',
    	'guru_id',
    	'siswa_id',
    	'mapel_id'
    	
    ];

    protected $table = 'nilai_rapor';

    public function user()
    {

    	//ga ngerti yang ini mah
    }
}
