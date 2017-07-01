<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Place
{
    protected $table = 'pharmacies';

    /**
    * Get the place record associated with the pharmacy.
    */
    public function place()
    {
        return $this->belongsTo('App\Place');
    }
}
