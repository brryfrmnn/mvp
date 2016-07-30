<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
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
    	'mapel_id',
        'angka_pengetahuan_puluhan',
        'angka_keterampilan_puluhan',
        'angka_sikap_puluhan',
        'angka_pengetahuan',
        'angka_keterampilan',
        'angka_sikap',
        'predikat_pengetahuan',
        'predikat_keterampilan',
        'predikat_sikap',
        'antar_mapel'
    	
    ];

    protected $table = 'nilai_rapor';

    public function guru() //relasi user dengan
    {
        return $this->belongsTo('App\User', 'guru_id','id');
    }
    public function siswa() //relasi user dengan
    {
        return $this->belongsTo('App\User', 'siswa_id','id');
    }
     public function mapel() //relasi user dengan
    {
        return $this->belongsTo('App\User', 'mapel_id','id');
    }
}
