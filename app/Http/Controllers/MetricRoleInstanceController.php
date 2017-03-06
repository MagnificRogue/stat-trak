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
    $data["data"]["metric_role_instances"] = MetricRoleInstance::all(); 
    return response()->json($data);
  }

  public function show($user_id, $role_id, $metric_id, MetricRoleInstance $metric_role_instance){
    $data["data"]["metric_role_instance"] = $metric_role_instance;
    return response()->json($data);
  }

  public function create($user_id, $role_id, $metric_id){
    //lets see if all of the relationships are there
    $metric_role = $this->check_user_has_role_and_role_has_metric($user_id, $role_id, $metric_id);

    if(!empty($metric_role)){
      //converting to array to pass to params of the instance create method
      //also the 0 represents the need to the the first object to convert
      //to the array, not sure if there is a better way but this works
      $metric_role = collect($metric_role[0])->toArray();
      //its not empty so lets add the count now
      $metric_role["count"] = $this->request->only(["count"])["count"];
      if($metric_role_instance = MetricRoleInstance::create($metric_role)){
        $data["data"]["metric_role_instance"] = $metric_role_instance;
        return response()->json($data);
      }else{
        return response()->json(['message' => 'Record could not be created'], 400);
      } 
    }else{
      return response()->json(['message' => 'The user either did not have the correct role or the role not the correct metric.
                                Associations where not valid.'], 400);
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
    //I am thinking that validating the relationships here is pointless
    //the reason being that we are looking the instance up by its id, meaning it was already created
    //and since it is validated on creation there is no need to do it here.
    if($metric_role_instance->update($this->request->all())){
      $data["data"]["metric_role_instance"] = $metric_role_instance;
      return response()->json($data);
    }else{
      return response()->json(['message' => 'Record could not be updated'], 400);
    } 
  }

  private function check_user_has_role_and_role_has_metric($user_id, $role_id, $metric_id){
    //checking the relationships and also bringing back the metrici_role_id and user_id we
    $results = DB::select("
      select mr.id 'metric_role_id', u.id 'user_id'
      from users u 
      inner join role_user ru on ru.user_id = u.id
      inner join metric_role mr on mr.role_id = ru.id
      where u.id = :user_id and ru.role_id = :role_id and mr.metric_id = :metric_id",
      array("user_id"=>$user_id,"role_id"=>$role_id,"metric_id"=>$metric_id)
    );
    return $results;
  }
}
