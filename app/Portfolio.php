<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function user()
   {
       return $this->belongsTo('App\User');
   }

   /**
     * Get the report record associated with the portfolio.
     */
    public function report()
    {
        return $this->belongsTo('App\Report');
    }

    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }
}
