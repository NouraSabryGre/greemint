<?php

namespace App\Http\Controllers;

use App\DrugsOrder;
use Illuminate\Http\Request;

class DrugsOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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
        // compare prices
        
        // choose best price

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DrugsOrder  $drugsOrder
     * @return \Illuminate\Http\Response
     */
    public function show(DrugsOrder $drugsOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DrugsOrder  $drugsOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(DrugsOrder $drugsOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DrugsOrder  $drugsOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DrugsOrder $drugsOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DrugsOrder  $drugsOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(DrugsOrder $drugsOrder)
    {
        //
    }
}
