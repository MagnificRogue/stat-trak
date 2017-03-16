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
        'name', 'email', 'password','company_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
     * Define what relations we want to bring in
     *  if somebody requests a full instance of this model
     */
    public static $fullWith = ['company','roles'];

    
    /*
     * Define the "levels" that a users permission maps to.
     *  Out of the box, laravel doesn't give us a native
     *  way of accessing an enum's possible value
     *  in the database, so here we're just going to have
     *  a mapping between the permissions and a value
     */
    public static $permissions = [
      'guest' => 0,
      'standard' => 1,
      'admin' => 2,
      'super_admin' => 3 
    ];


    /**
     * Retrieve the company that this user belongs to
     *
     */
    public function company() {
      return $this->belongsTo('App\Company'); 
    } 

    /**
     * Retrieve all roles this user has
     */
    public function roles() {
      return $this->belongsToMany('App\Role'); 
    }

    public function isSuperAdmin() {
      return $this->permission === 'super_admin'; 
    }

    public function isAdmin() {
      return $this->permission === 'admin'; 
    }

}
