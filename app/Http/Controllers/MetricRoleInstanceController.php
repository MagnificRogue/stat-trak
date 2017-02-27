<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MetricRoleInstance;


class MetricRoleInstanceController extends Controller
{
  protected $request;

  public function __construct(Request $request) {
    $this->request = $request;
  }

  public function index(){
    $data["data"]["metric_role_instances"] = MetricRoleInstance::all(); 
    return response()->json($data);
  }

  public function show($user_id, $role_id, $metric_id, MetricRoleInstance $metric_role_instance){
    $data["data"]["metric_role_instance"] = $metric_role_instance;
    return response()->json($data);
  }

  public function create($user_id, $role_id, $metric_id){
    $metric_role = \App\Role::find($role_id)->metrics()->where("metrics.id", $metric_id)->get()->first();
    $metric_role_array = array("metric_role_id"=> $metric_role->pivot->id,"count"=>$this->request->only('count')["count"]);
    if($metric_role_instance = MetricRoleInstance::create($metric_role_array)){
      $data["data"]["metric_role_instance"] = $metric_role_instance;
      return response()->json($data);
    }else{
      return response()->json(['message' => 'Record could not be created'], 400);
    } 
  }

  public function destroy($user_id, $role_id, $metric_id, $metric_role_instance_id){
    if(!MetricRoleInstance::destroy($metric_role_instance_id)){
      return response()->json(['message' => 'Record not found'], 404);
    } 
    $data["data"]["metric_role_instance"] = null;
    return response()->json($data);
  }

  public function update($user_id, $role_id, $metric_id, MetricRoleInstance $metric_role_instance){
    if($metric_role_instance->update($this->request->all())){
      $data["data"]["metric_role_instance"] = $metric_role_instance;
      return response()->json($data);
    }else{
      return response()->json(['message' => 'Record could not be updated'], 400);
    } 
  }
}
