<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
class Advert extends Moloquent
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    //
}
