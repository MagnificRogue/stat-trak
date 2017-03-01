<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\MetricRoleInstance;

class InstanceController extends Controller
{
  protected $request;
  protected $params;

  public function __construct(Request $request) {
    $this->request = $request;
    $this->params = (object) $request->query();
  }


  public function index() {

    $q = MetricRoleInstance::query();
    dd($this->request);
    $q->where("user_id", $this->request->user->id);

    if(property_exists($this->params, "metric")) {
      $q->where("metric_id",$this->params->metric);
    }
    
    if(property_exists($this->params, "role")) {
      $q->where("role_id", $this->params->role);
    }
    
    return response()->json($q->get());
    
  } 
}
