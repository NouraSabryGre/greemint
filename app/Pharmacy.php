<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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


    /**
     * The drugs that are in the Pharmacy.
     */
    public function drugs()
    {
        return $this->belongsToMany('App\Drug')->withPivot('price');
    }



    public function hasDrugs($drugs)
    {

      foreach ($drugs as $drug)
      {
        if ($this->hasDrug($drug) == false)
        {
          return false;
        }
      }
      return true;
    }

    private function hasDrug(Drug $drug)
    {
      foreach ($this->drugs as $pharmacyDrug) {
        if ($drug->id == $pharmacyDrug->id)
        {
          return true;
        }
      }
      return false;
    }



    public function calculateTotalPriceFor($drugs)
    {
      $prices = array();
      foreach ($drugs as $drug) {
        $prices[] = DB::table('drug_pharmacy')->select('price')->where([
          ['drug_id', '=', $drug->id],
          ['pharmacy_id', '=', $this->id],
        ])->first();

      }
      $total = 0 ;
      foreach ($prices as $drug) {
        $total += $drug->price;
      }
      return $total; 
    }
}
