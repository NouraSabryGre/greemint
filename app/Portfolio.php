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

    /**
      * Get the prescription record associated with the portfolio.
      */
     public function prescription()
     {
         return $this->belongsTo('App\Prescription');
     }

    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }


    /**
     * Get the comments for the report post.
     */
    public function comments()
    {
        return $this->report->hasMany('App\Comment');
    }
}
