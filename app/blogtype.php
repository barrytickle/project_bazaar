<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogtype extends Model
{

  


    public function type(){
      return $this->belongsTo('App\blog');
    }
}
