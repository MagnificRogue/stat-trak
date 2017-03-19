<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MetricRoleInstance;
use Illuminate\Support\Facades\DB;

class MetricRoleInstanceController extends Controller{

  protected $request;

  public function __construct(Request $request) {
    $this->request = $request;
  }

  public function index(){
    $q = MetricRoleInstance::query(); 

    if($this->request->user){
      $q->where('user_id', $this->request->user); 
    }
    
    if($this->request->metric){
      $metric_role_ids = \DB::table('metric_role')->where('metric_id', $this->request->metric)->pluck('id');
      $q->whereIn('metric_role_id', $metric_role_ids);
    }

    if($this->request->role){
      $metric_role_ids = \DB::table('metric_role')->where('role_id', $this->request->role)->pluck('id');
      $q->whereIn('metric_role_id', $metric_role_ids);
    }

    
    $data["data"]["metric_role_instances"] = $q->get();
    return response()->json($data);
  }

  public function show(MetricRoleInstance $metric_role_instance){
    $data["data"]["metric_role_instance"] = $metric_role_instance;
    return response()->json($data);
  }

  public function create(){
    $request = $this->request;

    if(!$request->user || !$request->metric || !$request->role || !$request->count){
       return response()->json(['message' => 'A metric, a role, a user, and a count are required to create an instance of the assocation'], 400);
    }

    $user = \App\User::where('id', $request->user)->first();
    $role = \App\Role::where('id', $request->role)->first();
    $metric = \App\Metric::where('id', $request->metric)->first();

    if(!$user || !$role || !$metric) {
      return response()->json(['message' => 'A valid metric, a valid role, and a valid user are required to create an instance of the assocation'], 404);
    }
    
    $validUserToRole = $user->roles->contains($role->id);
    $validRoleToMetric = $role->metrics->contains($metric->id);

    if(!$validUserToRole || !$validRoleToMetric){
      return response()->json(['message' => 'The user either did not have the correct role or the role not the correct metric.
                                Associations where not valid.'], 400);
    }

    $metricRoleId = $role->metrics->where('id', $request->metric)->first()->pivot->id;
    
    $instance = MetricRoleInstance::create(['user_id' => $user->id, 'count' => $request->count, 'metric_role_id' => $metricRoleId]);
    if(!$instance){
      return response()->json(['message' => 'Record could not be created'], 400);
    }
    $data["data"]["metric_role_instance"] = $instance;
    return response()->json($data);
  } 

  public function destroy($metric_role_instance_id){
    if(!MetricRoleInstance::destroy($metric_role_instance_id)){
      return response()->json(['message' => 'Record not found'], 404);
    } 
    $data["data"]["metric_role_instance"] = null;
    return response()->json($data);
  }

  public function update(MetricRoleInstance $metric_role_instance){
    if($metric_role_instance->update($this->request->all())){
      $data["data"]["metric_role_instance"] = $metric_role_instance;
      return response()->json($data);
    } else {
      return response()->json(['message' => 'Record could not be updated'], 400);
    } 
  }
}
