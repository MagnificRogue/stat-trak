<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

  /*
   * Allow for mass assignment of name property when creating a new company
   *
   * @var array
   */
  protected $fillable = ['name'];

  /**
   * Get all of the users for the company
   */

  public function users() {
    return $this->hasMany('App\User'); 
  } 

}
