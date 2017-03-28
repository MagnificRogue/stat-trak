<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Company;

class CompanyController extends Controller{
  protected $request;

  public function __construct(Request $request) {
    $this->request = $request;
  }

  public function index(){
    $data["data"]["companies"] = Company::all(); 
    return response()->json($data);
  }

  public function show(Company $company ){
    if(!$this->request->user()->can('view', $company)) {
      $this->returnUnauthorized(); 
    }

    $data["data"]["company"] = $company;
    return response()->json($data);
  }

  public function create(){
    if(!$this->request->user()->can('create', Company::class)) {
      $this->returnUnauthorized(); 
    }

    if($company = Company::create($this->request->only('name'))){
     $data["data"]["company"] = $company;
     return response()->json($data);
    }else{
      return response()->json(['message' => 'Record could not be created'], 400);
    } 
  }

  public function destroy(Company $company){
     if(!$this->request->user()->can('delete', $company)) {
      $this->returnUnauthorized(); 
    }
   
    //not sure if we really want to allow a company to be destroyed
    //commenting this until we figure out what we should do
    //i am thinking just making it inactive or active 
    //if(!Company::destroy($id)){
    // return response()->json(['message' => 'Record not found'], 404);
    //} 
    //return $data["data"]["company"] = null;
  }

  public function update(Company $company){
    if(!$this->request->user()->can('delete', $company)) {
      $this->returnUnauthorized(); 
    }

    if($company->update($this->request->all())){
     $data["data"]["company"] = $company;
     return response()->json($data);
    }else{
     return response()->json(['message' => 'Record could not be updated'], 400);
    } 
  }
}
