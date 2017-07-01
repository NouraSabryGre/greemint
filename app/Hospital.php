<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Place
{
    protected $table = 'hospitals';
    /**
    * Get the place record associated with the hospital.
    */
    public function place()
    {
        return $this->belongsTo('App\Place');
    }

    /**
    * Get the Doctors that work in this hospital.
    */
    public function doctors()
    {
        return $this->belongsToMany('App\Doctor');
    }




}
