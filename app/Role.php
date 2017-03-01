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
   * Define what relations we want to bring in
   *  if somebody requests a full instance of this model
   */
  public static $fullWith = ['company','metrics','users'];


  /*
   * Retrieve all users that have this role
   */ 
  public function users() {
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
   * Retrive all metrics this role belongs to
   *
   */
  public function metrics() {
    return $this->belongsToMany('App\Metric')->withPivot('id');
  }

  /**
   * If instantiating the pivot table, instantiate our custom model instead of the default
   */
  public function newPivot(Model $parent, array $attributes, $table, $exists, $using=NULL) {
    if ($parent instanceof Metric) {
      return new MetricRolePivot($parent, $attributes, $table, $exists, $using);
    }
    return parent::newPivot($parent, $attributes, $table, $exists, $using);
  }

}
