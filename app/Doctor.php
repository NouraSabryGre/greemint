<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //


    /**
    * Get the uer record associated with the doctor.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
