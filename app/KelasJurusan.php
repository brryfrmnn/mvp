<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class KelasJurusan extends Model
{
    //
    
    protected $fillabel = [

    	
    	'kelas_id',
    	'jurusan_id',

    ];

    protected $table = 'kelas_jurusan';
    protected $appends = ['kelas_jurusan','kj_kode'];

    public function jurusan()
    {
    	return $this->belongsTo('App\Jurusan','jurusan_id', 'id');
    }
     public function kelas()
    {
        return $this->belongsTo('App\Kelas','kelas_id', 'id');
    }

    public function getKelasJurusanAttribute()
    {
        return $this->kelas->nama.' '.$this->jurusan->nama;
    }

    public function getKjKodeAttribute()
    {
        return $this->kelas->nama.' '.$this->jurusan->kode;
    }


}
