<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model implements DoctorWritable
{
  /**
   * Get the phone record associated with the user.
   */
  public function portfolio()
  {
      return $this->hasOne('App\Portfolio');
  }

}
