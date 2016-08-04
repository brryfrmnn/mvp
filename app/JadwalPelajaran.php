<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class JadwalPelajaran extends Model
{
    //
    
    protected $fillabel = [

 
    	'mapel_id',
    	'admin_id',
        'kelasjurusan_id',
        'guru_id',
        'semester',
        'tahun_ajaran',


    ];

    protected $table = 'jadwal_pelajaran';

    public function guru()
    {
        //relasi dari tabel jadwal ke guru adalah many to One
        return $this->belongsTo('App\User','guru_id', 'id');
    }

    public function mapel()
    {
        //relasi dari tabel jadwal ke guru adalah many to One
        return $this->belongsTo('App\Mapel','mapel_id', 'id');
    }

    public function admin()
    {
        //relasi dari tabel jadwal ke guru adalah many to One
        return $this->belongsTo('App\User','admin_id', 'id');
    }

    public function kelasJurusan()
    {
        //relasi dari tabel jadwal ke guru adalah many to One
        return $this->belongsTo('App\KelasJurusan','kelasjurusan_id', 'id');
    }

    

}
