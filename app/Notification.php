<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Moloquent;

class Notification extends Moloquent
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    //
}
