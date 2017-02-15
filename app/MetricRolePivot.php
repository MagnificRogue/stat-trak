<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class MetricRolePivot extends Pivot 
{
  public function role() {
    return $this->belongsTo('App\Role'); 
  }

  public function metric() {
    return $this->belongsTo('App\Metric'); 
  }

  public function instances() {
    return $this->hasMany('App\MetricRoleInstance','metric_role_id'); 
  }  
}
