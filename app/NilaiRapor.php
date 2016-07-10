<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiRapor extends Model
{
    //
    use SoftDeletes;
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
