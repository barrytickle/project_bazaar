<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{

    protected $fillable = [
      'blog_title',
      'blog_date',
      'blog_content',
      'slug',
      'type'
    ];

    public function types(){
      return $this->belongsTo('App\blogtype', 'type');
    }
}
