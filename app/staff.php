<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
  public function project(){
    return $this->belongsTo('App\project', 'project_authorize');
  }
}
