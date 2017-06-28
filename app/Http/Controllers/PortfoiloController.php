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
    public function create(Request $request, $name)
    {
      $name =  str_replace("-"," ",$name) ;
      // Get User
      $user = \App\User::where('name' , $name)->first();

      $passedData = array();
      // TODO: ID from auth()
      $id = 5;
      $doctor = \App\Doctor::find($id);

      $passedData = array(
        'user' => unsetByKeys(['id', 'password', 'remember_token', 'created_at', 'updated_at'], $doctor->user['attributes']),
         'patients' => $doctor->patients,
         'forUser' => $user->name,
      );

      $passedData['user']['profilepic'] = "usersprofilepicture.jpg";


      return view('create.portfolio', $passedData);
    }

    public function viewNew(Request $request)
    {

      $userName = $request->user;

      $userName =  str_replace("-"," ",$userName) ;
      
      // Get User
      $user = \App\User::where('name' , $userName)->first();

      $report = new \App\Report;
      $report->title = $request->title;
      $report->body = $request->body;
      $report->save();

      $portfolio = new \App\Portfolio;
      $portfolio->user_id = $user->id;
      // TODO: auth()->id
      $doctorID = 2;
      $portfolio->doctor_id = $doctorID;
      $portfolio->report_id = $report->id;
      $portfolio->save();
      dd($portfolio->id);


    }
}
