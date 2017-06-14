<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
  /**
   * All Prescription that contain  this Drug.
   */
  public function prescriptions()
  {
      return $this->belongsToMany('App\Prescription');
  }
}
