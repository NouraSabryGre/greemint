<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = 2;
        $user = User::find($user_id);
        $userArray  = $user->userInfoArray();
        $familyList = $user->familyInfoArray();

        $passedData['user'] = $userArray;
        $passedData['family'] = $familyList;

          return view('view.family' , $passedData);
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
        $passedData = array();
        $user = User::find($id);
        // user info
        $passedData['user'] = $user->userInfoArray();

        // durgs && // reports
        $drugs = array();
        $reports = array();
        $portfolios = $user->portfolios;

        foreach ($portfolios as  $portfolio)
        {
          $prescription = $portfolio->prescription;
          $report = $portfolio->report;
          foreach ($prescription->drugs as  $drug)
          {
            $drugs[] = $drug;
          }
          $reports[] = $report;

        }
        $passedData['drugs'] = $drugs;
        $passedData['reports'] = $reports;

        // schedule
        $passedData['schedule'] = $user->schedule;
        $passedData['is_doctor'] = false;




        return view('view.user', $passedData);
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
}
