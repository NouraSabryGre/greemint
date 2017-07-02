<?php

namespace App\Http\Controllers;

use App\DrugsOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DrugsOrderController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prescription = \App\Prescription::find($request->prescription_id);
        $orderedDrugs = $prescription->drugs;


        // Search for drugs in all pharmacies
        $pharmacies = \App\Pharmacy::all();
        // array:5
        $result = array();
        $counter = 0;
        foreach ($pharmacies as $pharmacy)
        {
          $counter ++;
          $result[$counter] = [
            'pharmacy' => $pharmacy,
            'contains' => $pharmacy->hasDrugs($orderedDrugs),
          ];

        }

        // get pharmacies that contain all drugs
        for ($i=1; $i <= $counter ; $i++) {
          if($result[$i]['contains'] == false)
          {
            unset($result[$i]);
          }
        }
        if(count($result) == 0 )
        {
            dd('No pharmacy has these all drugs');
        }

        // compare prices
        $prices = array();
        foreach ($result as $value) {
          // dd($value);
          $pharmacy = $value['pharmacy'];
          $prices[] = [
            'pharmacy' => $pharmacy,
            'total' => $pharmacy->calculateTotalPriceFor($orderedDrugs),
          ];
        }

        // choose best price
        $pharmacyWithLowestPrice = $this->pharmacyWithLowestPrice($prices);


        $order = new \App\Order;
        $order->amount = $pharmacyWithLowestPrice['min'];
        $order->paid = false;
        $order->save();



        $drugsOrder = new DrugsOrder;
        $drugsOrder->order_id = $order->id;
        $drugsOrder->pharmacy_id = $pharmacyWithLowestPrice['pharmacy']->id;
        $drugsOrder->save();



        return redirect('/order/drugs/' . $drugsOrder->id);
    }

    private function pharmacyWithLowestPrice($prices)
    {
      $choosenPhramacy = array(
        'min' => $prices[0]['total'],
        'pharmacy' => $prices[0]['pharmacy'],
      );
      for ($i=0; $i < count($prices) ; $i++) {
        if ($prices[$i]['total'] < $choosenPhramacy['min'])
        {
          $choosenPhramacy['min'] = $prices[$i]['total'];
          $choosenPhramacy['pharmacy']  = $prices[$i]['pharmacy'];
        }
      }
      return $choosenPhramacy;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\DrugsOrder  $drugsOrder
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $drugsOrder = DrugsOrder::find($id);
        $passedData = array(
          'theOrder' => $drugsOrder,
        );

        return view('view.order.drugs.confirm', $passedData);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DrugsOrder  $drugsOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        // get payment method ID
        $paymentID = DB::table('payment_methods')
        ->select('id')
        ->where('method', '=', $request->method)
        ->first()
        ->id;
        // assign payment method id
        $drugsOrder = DrugsOrder::find($id);
        $order = $drugsOrder->order;
        $order->payment_method_id = $paymentID;
        $order->save();
        // if credit checkout to bank
        if ($paymentID == 2 )
        {
          return redirect('/migs/process/'. $id);
        }
    }

    public function success($id)
    {
      $drugsOrder = DrugsOrder::find($id);

      $passedData = array(
        'theOrder' => $drugsOrder ,
        'bankMessage' => \App\MIGS::getResultDescription($_GET['ac']),
        'status' => 1,
      );

      return view('view.order.drugs.success', $passedData);
    }
}
