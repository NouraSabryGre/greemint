<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Place
{
    protected $table = 'hospitals';
    /**
    * Get the place record associated with the Clinic.
    */
    public function place()
    {
        return $this->belongsTo('App\Place');
    }

}
