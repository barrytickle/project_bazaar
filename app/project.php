<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    public function staff(){
      return $this->belongsTo('App\staff', 'project_authorize');
    }

    public function student(){
      return $this->belongsTo('App\student', 'project_author');
    }

    public function like(){
      return $this->belongsTo('App\like');
    }

    public function degree(){
      return $this->belongsTo('App\degree', 'project_degree');
    }
}
