<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = [
      'student_id'
    ];

    public function user(){
      return $this->belongsTo('App\user');
    }

    public function degree(){
      return $this->belongsTo('App\degree');
    }




}
