<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Moloquent;
class Advert extends Moloquent
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
