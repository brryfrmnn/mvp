<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelasJurusan extends Model
{
    //
    use SoftDeletes;
    protected $fillabel = [

    	
    	'kelas_id',
    	'jurusan_id',

    ];

    protected $table = 'kelas_jurusan';

    public function jurusan()
    {
    	return $this->belongsTo('App\Jurusan','jurusan_id', 'id');
    }
     public function kelas()
    {
        return $this->belongsTo('App\Kelas','kelas_id', 'id');
    }

}
