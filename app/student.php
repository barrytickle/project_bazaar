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

    public function user(){
      return $this->belongsTo('App\user');
    }

    public function degree(){
      return $this->belongsTo('App\degree');
    }

     public function project(){
       return $this->belongsTo('App\project', 'project_author');
     }




}
