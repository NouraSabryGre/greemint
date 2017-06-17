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
}
