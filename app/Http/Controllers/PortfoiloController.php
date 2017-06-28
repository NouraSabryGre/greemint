<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PortfoiloController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $passedData = array();
      // TODO: ID from auth()
      $id = 5;
      $doctor = \App\Doctor::find($id);

      $passedData = array(
        'user' => unsetByKeys(['id', 'password', 'remember_token', 'created_at', 'updated_at'], $doctor->user['attributes']),
         'patients' => $doctor->patients,
      );

      $passedData['user']['profilepic'] = "usersprofilepicture.jpg";


      return view('create.portfolio', $passedData);
    }

    public function viewNew(Request $request)
    {
      $report = new \App\Report;
      $report->title = $request->title;
      $report->body = $request->body;
      $report->save();
      dd($report->id);
    }
}
