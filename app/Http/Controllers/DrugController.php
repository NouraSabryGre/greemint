<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drug;
class DrugController extends Controller
{

    public function search($key = null)
    {
      if ($key != null)
      {
        $drugs = Drug::where('name', 'LIKE', $key.'%')->get();
        $drugsNames = array();
        foreach ($drugs as $drug)
        {
          $drugsNames[]['name'] = $drug->name;
        }
        return json_encode($drugsNames);
      }
      return json_encode( array());

    }
}
