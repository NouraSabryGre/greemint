<?php

namespace App\Http\Controllers;

use App\Code;
use Illuminate\Http\Request;

class CodeController extends Controller
{
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create($name)
  {
      $name =  str_replace("-"," ",$name) ;
      // Get User
      $user = \App\User::where('name' , $name)->first();
      // Invalid all valid codes on DB
      Code::where('user_id', $user->id)
          ->where('used', 0)
          ->update([
            'used' => 1 ,
            'updated_at' => \Carbon\Carbon::now(),
          ]);

      // Generate new Code
      $newCode = $user->generateNewCode();
      // retrun the code in JSON Form
      return json_encode(array('code' => $newCode));
  }
}
