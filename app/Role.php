<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  /**
   * Define which attributes of a role are fillable
   *
   * @var array
   */
  protected $fillable = ['name'];

  /*
   * Retrieve all users that have this role
   */ 
  public function users() {
    return $this->belongsToMany('App\User'); 
  }
}
