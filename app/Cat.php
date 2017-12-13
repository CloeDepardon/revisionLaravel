<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
  public $timestamps = false;
  public function gender()
  {
    return $this->belongsTo('App\Gender');
  }

  public function colors()
   {
      return $this->belongsToMany('App\Color');
   }
}
