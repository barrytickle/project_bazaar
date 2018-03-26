<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = [
      'user_id',
      'student_id',
      'degree_id'
    ];

    /* One user can only be one student or one staff member. */
    public function user(){
      return $this->belongsTo('App\user');
    }

    /* User can only be allocted to one Degree, will grab degree pathway by student ID */
    public function degree(){
      return $this->belongsTo('App\degree');
    }

    /* Students may create one or many projects, will grab projects by student ID */
     public function project(){
       return $this->belongsTo('App\project', 'project_author');
     }

     /* Users may post one or many comments, will grab comments via the student ID */
     public function comment(){
       return $this->belongsToMany('App\user', 'authorize_comments')->withPivot('project_comment');
     }


}
