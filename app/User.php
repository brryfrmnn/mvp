<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cartalyst\Sentinel\Users\EloquentUser as Sentinel;

class User extends Sentinel
{
    protected $table = 'users';
    protected $loginNames = ['nomor_induk','email'];
    protected $fillable = [
        'email',
        'nomor_induk',
        'password',
        'last_name',
        'first_name',
        'permissions',
    ];

    use SoftDeletes;
}
