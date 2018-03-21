<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{


    protected $fillable = [
      'project_name',
      'project_description',
      'project_date',
      'project_slug',
      'is_authorized',
      'project_degree',
      'project_author'
    ];

    public function student(){
      return $this->belongsTo('App\student', 'project_author');
    }

    public function like(){
      return $this->belongsTo('App\like');
    }

    public function degree(){
      return $this->belongsTo('App\degree', 'project_degree');
    }

    public function staff(){
      return $this->belongsToMany('App\staff', 'project_authorizes');
    }

    public function comment(){
      return $this->belongsToMany('App\user', 'authorize_comments')->withPivot('project_comment');
    }
}
