<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    //
    use SoftDeletes;
    protected $fillabel = [

    	'nama',
    	'kategori',
    	'admin_id',

    ];

    protected $table = 'mapel';

    public function user()
    {

    	//ga ngerti yang ini mah
    }
}
