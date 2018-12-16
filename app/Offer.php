<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Offer extends Moloquent
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    //
}
