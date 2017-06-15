<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ScheduleController extends Controller
{
  public function index()
  {
    // TODO: get auth user id
    $userId = 2;
    $user = User::find($userId);
    $userArray  = $user->userInfoArray();
    $familyList = $user->familyInfoArray();
    $schedule = $user->schedule;

    $passedData['user'] = $userArray;
    $passedData['family'] = $familyList;
    $passedData['schedule'] = $schedule;

    return view('schedule' , $passedData);

  }
}
