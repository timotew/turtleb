<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class TurtleStaff extends Moloquent
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    //
}
