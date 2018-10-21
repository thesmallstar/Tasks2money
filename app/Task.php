<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function giver()
    {
        return $this->belongsTo('App\user','id', 'giver');
    }
    public function taker()
    {
        return $this->belongsTo('App\user','id','taker');
    }
}
