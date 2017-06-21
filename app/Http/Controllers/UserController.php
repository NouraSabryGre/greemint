<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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
      $code = \App\Code::select('user_id' , 'used')->where('code' , $code)->first();
      if ($code->used == 1 )
      {
        return back()->with('error', 'User Code is in-valid');
      }
      else
      {
        // TODO: Set Code Used in DB
        $passedData = array();
        // view user's profile with option to write portfolios
        $user = \App\User::find($code->user_id);
        $userArray  = $user->userInfoArray();
        $passedData['user'] = $userArray;
        $passedData['drugs'] = $user->drugs();
        $passedData['reports'] = $user->reports();
        $passedData['schedule'] = $user->schedule;


        return view('view.user' , $passedData);
      }
    }
}
