<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Metric;

class MetricController extends Controller{
  protected $request;

  public function __construct(Request $request) {
    $this->request = $request;
  }

  public function index(){
    $data["data"]["metrics"] = Metric::all(); 
    return response()->json($data);
  }

  public function show(Metric $metric){
    $data["data"]["metric"] = $metric;
    return response()->json($data);
  }

  public function create(){
    if($metric = Metric::create($this->request->only('description','company_id'))){
      $data["data"]["metric"] = $metric;
      return response()->json($data);
    }else{
      return response()->json(['message' => 'Record could not be created'], 400);
    } 
  }

  public function destroy($id){
    if(!Metric::destroy($id)){
      return response()->json(['message' => 'Record not found'], 404);
    } 
    $data["data"]["metric"] = null;
    return response()->json($data);
  }

  public function update(Metric $metric){
    if($metric->update($this->request->all())){
      $data["data"]["metric"] = $metric;
      return response()->json($data);
    }else{
      return response()->json(['message' => 'Record could not be updated'], 400);
    } 
  }

}
