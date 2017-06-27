<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorSupervisionRequest extends Model implements Request
{
  public function send()
  {
      $user = \App\User::find($this->user_id);
      $user->recieveRequest($this);
  }



  public function doctor()
  {
      return $this->belongsTo('App\Doctor');
  }

}
