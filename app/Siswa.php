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
    // hasOne nya salah
    //coba liat perbedaanya
    // foreign_key nya beda.
    /*yang tadi user, foregin keynya itu user_id ngodingnya di Model user
    kalo ini Model Siswa tapi foreign key nya kelasjurusan_id , makanya error
    solusinya. di balik aja*/
    public function kelasJurusan()
    {
    	 return $this->belongsTo('App\KelasJurusan','kelas_jurusan_id', 'id'); /*1 KJ bisa dimiliki banyak siswa?*/
    }

   
}
