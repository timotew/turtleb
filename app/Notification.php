<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Notification extends Moloquent
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    //
}
