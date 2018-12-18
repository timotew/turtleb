<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Moloquent;

class GoldCoin extends Moloquent
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    //
}
