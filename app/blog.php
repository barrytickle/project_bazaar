<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    public function type(){
      return $this->belongsTo('App\blogtype', 'type');
    }
}
