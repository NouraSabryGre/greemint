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


}
