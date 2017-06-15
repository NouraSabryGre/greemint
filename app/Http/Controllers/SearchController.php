<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Hospital;
use App\Clinic;
use App\Doctor;

class SearchController extends Controller
{
    public function index()
    {
      // TODO: Search Query from GET URL
      $searchResult = array();

      $doctors = Doctor::all();
      foreach ($doctors as $doctor) {
        $searchResult['doctors'][] = $doctor;
      }

      $hospitals = Hospital::all();
      foreach ($hospitals as $hospital) {
        $searchResult['places'][] = $hospital;
      }
      $clinics = Clinic::all();
      foreach ($clinics as $clinic) {
        $searchResult['places'][] = $clinic;
      }


      $passedData['searchResult'] = $searchResult;

      $userId = 2 ;
      $user = \App\User::find($userId);

      $passedData['user'] = $user->userInfoArray();
      $passedData['family'] = $user->familyInfoArray();


      return view('search' , $passedData);
    }
}
