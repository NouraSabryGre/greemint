<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model implements DoctorWritable
{
  /**
   * The drugs that belong to this Prescription.
   */
  public function drugs()
  {
      return $this->belongsToMany('App\Drug');
  }
}
