<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 use SoftDeletes;
class Mapel extends Model
{
    //
   
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
