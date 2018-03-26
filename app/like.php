<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
  protected $fillable = [
    'student_id',
    'project_id'
  ];

  public function like(){
    return $this->hasMany('App\project');
  }

}
