<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    /**
    * The Doctors that user is undersupervision
    */
    public function doctors()
    {
        return $this->belongsToMany('App\Doctor');
    }


    public function family()
    {
      return $this->belongsToMany('App\User', 'family_user', 'user_id', 'family_id')->withPivot('degree');;
    }



    /**
     * Get the comments for the blog post.
     */
    public function portfolios()
    {
        return $this->hasMany('App\Portfolio');
    }


    /**
     * Get the schedule for the user .
     */
    public function schedule()
    {
        return $this->hasMany('App\Schedule');
    }




    public function userInfoArray() {
      $userArray  = array(
        'Name' => $this->name ,
        'Age' => $this->age ,
        'Mobile' => $this->mobile ,
        'Email' => $this->email ,
        'profilepic' => "usersprofilepicture.jpg"
       );
       return $userArray;
    }

    public function familyInfoArray() {
      $familymembers = $this->family;
      $familyList = array();
      for ($i = 0 ; $i < count($familymembers) ; $i++) {
        $familyList[$i] = array(
          'id' =>$familymembers[$i]->id ,
          'name' =>$familymembers[$i]->name ,
          'degree' => $familymembers[$i]->pivot->degree,
          'profilepic' => "family" . ($i+1) . ".jpg"
        );
      }
      return $familyList;
    }


    public function portfoliosOfDoctorWhithID($id)
    {
      $doctor = \App\Doctor::find($id);
      $allPortfolios = $this->portfolios;
      $thePortfolios = array();
      foreach ($allPortfolios as $portfolio)
      {
        if ($portfolio->doctor == $doctor)
        {
          $thePortfolios[] = $portfolio;
        }
      }
      return $thePortfolios;
    }


    public function drugs()
    {
      $drugs = array();
      $portfolios = $this->portfolios;
      foreach ($portfolios as $portfolio) {
        $prescription = $portfolio->prescription;
        foreach ($prescription->drugs as $drug) {
          $drugs [] = $drug;
        }
      }
      return $drugs;
    }


    public function reports()
    {
      $reports = array();
      foreach ($this->portfolios as $portfolio)
      {
        $reports[] = $portfolio->report;
      }
      return $reports;
    }


    public function generateNewCode()
    {
      $theCode = uniqid();
      $code = new \App\Code;
      $code->code = $theCode;
      $code->user_id = $this->id;
      $code->used = 0;
      $code->save();
      return $theCode;
    }


    public function recieveRequest(Request $request)
    {
      if (get_class($request) == "App\DoctorSupervisionRequest")
      {
          
          $this->notify(new \App\Notifications\SupervisionRequest($request));
      }

    }

}
