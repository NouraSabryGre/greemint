<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Notifications\DoctorViewProfile;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user = \App\User::find($id);
      // needed data to the view
      // User info:
        // name
        // age
        // email
        // mobile
        // profile pic

      $userArray  = $user->userInfoArray();
      // family members list
      $familyList = $user->familyInfoArray();

      // All portfolios
      $portfolios = $user->portfolios;






      $passedData['user'] = $userArray;
      $passedData['family'] = $familyList;
      $passedData['portfolios'] = $portfolios;


        return view('profile' , $passedData);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }



    public function showWithCode($code) {
      $code = \App\Code::select('user_id' , 'used' , 'id')->where('code' , $code)->first();
      if ($code->used == 1 )
      {
        return back()->with('error', 'User Code is in-valid');
      }
      else
      {
        $code = \App\Code::find($code->id);
        $code->used = 1;
        //TODO: after implementation
        // $code->save();



        $passedData = array();
        // view user's profile with option to write portfolios
        $user = \App\User::find($code->user_id);


        // TODO: Notify User
        // TODO: auth()->id for doctor
        // create doctor object
        $id= 2;
        $doctor = \App\Doctor::find($id);
        $user->notify(new \App\Notifications\DoctorViewProfile($doctor));


        // Send to user a supervision request
        $doctor->requestSupervisionOn($user);

        $userArray  = $user->userInfoArray();
        $passedData = array(
          'user' =>$userArray ,
          'drugs' =>$user->drugs() ,
          'reports' =>$user->reports() ,
          'schedule' =>$user->schedule ,
          'is_doctor' => true
        );


        return view('view.user' , $passedData);
      }
    }
}
