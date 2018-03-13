<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    protected $fillable = [
      'student_id',
      'date',
      'ip_address'
    ];

    public function student(){
      return $this->hasOne('App\student', 'student_id', 'student_id');
    }

  }
