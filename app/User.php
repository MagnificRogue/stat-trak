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
     * The attributes that should be guarded
     * against mass assignment
     *
     * @var array
     */
    protected $guarded = [
      'is_admin', 'is_super_admin' 
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

    public function instances() {
      return $this->hasMany('App\MetricRoleInstance'); 
    }
}
