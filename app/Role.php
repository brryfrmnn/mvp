<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Cartalyst\Sentinel\Roles\EloquentRole as SentinelRole;

class Role extends SentinelRole
{
    //
    protected $table = 'roles';

}
