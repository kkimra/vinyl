<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
  public function vinyls()
   {
    return $this->hasMany('App\Vinyl');
   }
}
