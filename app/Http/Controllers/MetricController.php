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
    if(!$this->request->user()->can('view', $metric)) {
      $this->returnUnauthorized(); 
    }

    $data["data"]["metric"] = $metric;
    return response()->json($data);
  }

  public function create(){
    if(!$this->request->user()->can('create', Metric::class)) {
      $this->returnUnauthorized(); 
    }

    if($metric = Metric::create($this->request->only('description','company_id'))){
      $data["data"]["metric"] = $metric;
      return response()->json($data);
    }else{
      return response()->json(['message' => 'Record could not be created'], 400);
    } 
  }

  public function destroy(Metric $metric){
    if(!$this->request->user()->can('delete', $metric)) {
      $this->returnUnauthorized(); 
    }

    if(!Metric::destroy($metric->id)){
      return response()->json(['message' => 'Record not found'], 404);
    } 
    $data["data"]["metric"] = null;
    return response()->json($data);
  }

  public function update(Metric $metric){
    if(!$this->request->user()->can('update', $metric)) {
      $this->returnUnauthorized(); 
    }

    if($metric->update($this->request->all())){
      $data["data"]["metric"] = $metric;
      return response()->json($data);
    }else{
      return response()->json(['message' => 'Record could not be updated'], 400);
    } 
  }

}
