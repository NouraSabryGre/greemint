<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Place
{
    protected $table = 'clinics';

    /**
    * Get the place record associated with the Clinic.
    */
    public function place()
    {
        return $this->belongsTo('App\Place');
    }


    /**
    * Get the Doctors that work in this clinic.
    */
    public function doctors()
    {
        return $this->belongsToMany('App\Doctor');
    }


}
