<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  /**
   * Get the payment_method of the order.
   */
  public function paymentMethod()
  {
      return $this->belongsTo('App\PaymentMethod');
  }


  /**
   * Get the user of the order.
   */
  public function user()
  {
      return $this->belongsTo('App\User');
  }

}
