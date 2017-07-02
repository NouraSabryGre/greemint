<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrugsOrder extends Order
{
  protected $table = 'drugs_orders';


  /**
  * Get the order record associated with the this.
  */
  public function order()
  {
      return $this->belongsTo('App\Order');
  }


  public function pharmacy()
  {
    return $this->belongsTo('App\Pharmacy');
  }

}
