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

  /**
   * The pharmacy that has this drug.
   */
  public function pharmacies()
  {
      return $this->belongsToMany('App\Pharmacy')->withPivot('price');
  }



}
