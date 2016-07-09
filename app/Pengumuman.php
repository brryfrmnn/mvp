<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{	
	//tentukan field yang akan diisi apa aja
    protected $fillable = [
    	'judul',
    	'isi',
    	'admin_id'
    ];

    //tentukan table apa yang ada di model ini
    protected $table = 'pengumuman';

    //membuat relasi yang berhubungan dengan model/table in

    public function user()
    {
    	/*
			membuat relasi pengumuman ke user M:1 jadi pake belongsTo
			jika membuat relasi pada model user ke pengumuman 1:M
			menggunakan hasMany/memilikibanyak
			contoh belongsTo('lokasi model','foreign_key','primary key')
			contoh hasMany('lokasi model','foreign_key','primary_key')
    	*/
    	return $this->belongsTo('App\User','admin_id', 'id');
    }


}
