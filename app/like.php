<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
  protected $fillable = [
    'student_id',
    'project_id'
  ];

}
