<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Place
{
    protected $table = 'clinics';

    /**
    * Get the uer record associated with the doctor.
    */
    public function place()
    {
        return $this->belongsTo('App\Place');
    }

}
