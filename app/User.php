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
      return $this->belongsToMany('App\User', 'family_user', 'user_id', 'family_id');
    }



    /**
     * Get the comments for the blog post.
     */
    public function portfolios()
    {
        return $this->hasMany('App\Portfolio');
    }
}
