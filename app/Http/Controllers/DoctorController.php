<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
  public function show($id)
  {
    $passedData = array();
    $doctor = Doctor::find($id);

    $passedData['user'] = $doctor->userInfoArray();

    $passedData['places'] = $doctor->workingPlaces();

    // TODO: Get Auth user's id
    $user = \App\User::find(2);
    $passedData['portfolios'] = $user->portfoliosOfDoctorWhithID($id);

    return view('view.doctor' , $passedData);
  }


  public function profile($id)
  {
    $passedData = array();
    $doctor = Doctor::find($id);
    $passedData['user'] = $doctor->user['attributes'];
    $passedData['user'] = unsetByKeys(['id','password','remember_token','created_at','updated_at'],$passedData['user']);

    //TODO:User Profile Picture
    $passedData['user']['profilepic'] = "usersprofilepicture.jpg";



    $passedData['patients'] = $doctor->patients;
    return view('profile.doctor' , $passedData);

  }


  // private function unsetByKeys($keys, $fromArray)
  // {
  //   foreach ($keys as $key ) {
  //     unset($fromArray[$key]);
  //   }
  //
  //   return $fromArray;
  // }

}
