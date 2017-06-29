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

      $portfolio = new Portfolio;
      $portfolio->user_id = $user->id;
      // TODO: auth()->id
      $doctorID = 2;
      $portfolio->doctor_id = $doctorID;
      $portfolio->report_id = $report->id;
      $portfolio->save();

      return redirect('portfolio/' . $portfolio->id . '/prescription/new');

    }

    public function newPrescription($id)
    {
      $doctor = \App\Doctor::find(2);
      $portfolio = Portfolio::find($id);
      $passedData = array(
        'report' => $portfolio->report,
        'user' => unsetByKeys(['id', 'password', 'remember_token', 'created_at', 'updated_at'], $doctor->user['attributes']),
         'patients' => $doctor->patients,
      );

      $passedData['user']['profilepic'] = "usersprofilepicture.jpg";

      return view('create.prescription', $passedData);
    }


    public function storePrescription(Request $request )
    {
      $drugs = array();
      $numberOfDrugs = $request->numberOfDrugs;

      for ($i=1; $i <= $numberOfDrugs ; $i++) {
        $select = false;
        $date = false;
        $name = null;
        $drug = array();
        foreach ($request->all() as $key => $value) {

          if ($select == false )
          {
            if ($key == "select" . $i)
            {
              $select = true;
              $drug['select'] = $value ;
            }
          }
          if ($date == false )
          {
            if ($key == 'drug' . $i . '-date-input')
            {
              $drug['date'] = $value ;
              $date = true;
            }
          }
          if ($name == null )
          {
            if ($key == 'drug' . $i )
            {
              $name  = $value;
              $drug['name'] = $name ;
            }
          }
          if ($name != null && $select != false && $date != false)
          {
            continue;

          }
        }
        $drugs[] = $drug;
      }
      dd($drugs);
      // return json_encode($request->all());
    }
}
