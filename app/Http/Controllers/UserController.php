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

        $userArray  = array(
          'Name' => $user->name ,
          'Age' => $user->age ,
          'Mobile' => $user->mobile ,
          'Email' => $user->email ,
          'profilepic' => "usersprofilepicture.jpg"
         );
      // family members list
      $familymembers = $user->family;
      $familyList = $this->familyList($user);
      // All portfolios
      $portfolios = $user->portfolios;






      $passedData['user'] = $userArray;
      $passedData['family'] = $familyList;
      $passedData['portfolios'] = $portfolios;


        return view('profile' , $passedData);
    }

    private function familyList(User $user) {
      $familymembers = $user->family;
      $familyList = array();
      for ($i = 0 ; $i < count($familymembers) ; $i++) {
        $familyList[$i] = array(
          'id' =>$familymembers[$i]->id ,
          'name' =>$familymembers[$i]->name ,
          'profilepic' => "family" . ($i+1) . ".jpg"
        );
      }
      return $familyList;
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
