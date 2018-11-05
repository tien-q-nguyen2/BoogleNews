<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Headline extends Model
{
    public $dates = ['date'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function likes()
    {
        return $this->belongsToMany('App\User');
    }
}
