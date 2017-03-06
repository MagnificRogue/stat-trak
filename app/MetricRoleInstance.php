<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetricRoleInstance extends Model
{
  /**
   * Define which attributes of a role are fillable
   *
   * @var array
   */
  protected $fillable = ['metric_role_id','count','user_id'];
}
