<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    public $table = 'codes';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
