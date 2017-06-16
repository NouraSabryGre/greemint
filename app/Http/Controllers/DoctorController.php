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
    return view('view.doctor' , $passedData);
  }
}
