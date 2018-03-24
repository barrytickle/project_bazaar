<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{

    protected $fillable = [

    ];

    public function user(){
      return $this->belongsToMany('App\user', 'role_users');
    }
}
