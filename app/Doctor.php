<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends User
{


    protected $table = 'doctors';

    /**
    * Get the uer record associated with the doctor.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function userInfoArray() {
      $userArray  = array(
        'Name' => $this->user->name ,
        'Age' => $this->user->age ,
        'Mobile' => $this->user->mobile ,
        'Email' => $this->user->email ,
        'profilepic' => "usersprofilepicture.jpg"
       );
       return $userArray;
    }



    /**
     * The hospitals that doctor work in.
     */
    public function hospitals()
    {
        return $this->belongsToMany('App\Hospital');
    }

    /**
     * The clinics that doctor work in.
     */
    public function clinics()
    {
        return $this->belongsToMany('App\Clinic');
    }

    /**
     * The patients that under doctor's supervision.
     */
    public function patients()
    {
        return $this->belongsToMany('App\User' , 'doctor_patient', 'doctor_id', 'user_id');
    }


    /**
     * All places that doctor work in.
     */
     public function workingPlaces()
     {
       $places = array();
       $clinics = $this->clinics;
       foreach ($clinics as $clinic) {
         $places[] = $clinic;
       }
       $hospitals = $this->hospitals;
       foreach ($hospitals as $hospital) {
         $places[] = $hospital;
       }
       return $places;
     }



}
