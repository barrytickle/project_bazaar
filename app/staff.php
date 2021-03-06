<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{

  protected $fillable = [
    'user_id',
    'staff_name'
  ];

  public function project(){
    return $this->belongsToMany('App\project', 'project_authorizes')->withPivot('is_authorized');
  }

  public function comment(){
    return $this->belongsToMany('App\user', 'authorize_comments')->withPivot('project_comment');
  }
}
