<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Place
{
    protected $table = 'hospitals';
    /**
    * Get the uer record associated with the doctor.
    */
    public function place()
    {
        return $this->belongsTo('App\Place');
    }

}
