<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metric extends Model
{
  /**
   * Define which attributes of a role are fillable
   *
   * @var array
   */
  protected $fillable = ['description'];

  /*
   * Retrieve all users that have this role
   */ 
  public function users () {
    return $this->belongsToMany('App\User'); 
  }

  /**
   * Retrieve the company that this role belongs to
   *
   */
  public function company() {
    return $this->belongsTo('App\Company'); 
  } 

  /**
   * Retrive all roles this metric has 
   *
   */
  public function roles() {
    return $this->belongsToMany('App\Role')->withPivot('id');
  }


  /**
   * If instantiating the pivot table, instantiate our custom model instead of the default
   */
  public function newPivot(Model $parent, array $attributes, $table, $exists, $using=NULL) {
    if ($parent instanceof Role) {
      return new MetricRolePivot($parent, $attributes, $table, $exists, $using);
    }
    return parent::newPivot($parent, $attributes, $table, $exists, $using);
  }


}
