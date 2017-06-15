<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
  /**
   * Get the user that owns the schedule.
   */
  public function user()
  {
      return $this->belongsTo('App\User');
  }
}
