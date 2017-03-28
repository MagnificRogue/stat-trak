<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Role;


class RoleController extends Controller{

  protected $request;

  public function __construct(Request $request) {
    $this->request = $request;
  }

  public function index(){
    $data["data"]["roles"] = Role::all(); 
    return response()->json($data);
  }

  public function show(Role $role){
    if(!$this->request->user()->can('view', $role)) {
      $this->returnUnauthorized(); 
    }

    $data["data"]["role"] = $role;
    return response()->json($data);
  }

  public function create(){
    if(!$this->request->user()->can('create', Role::class)) {
      $this->returnUnauthorized(); 
    }

    if($role = Role::create($this->request->only('name','company_id'))){
      $data["data"]["role"] = $role;
      return response()->json($data);
    }else{
      return response()->json(['message' => 'Record could not be created'], 400);
    } 
  }

  public function destroy(Role $role){
    if(!$this->request->user()->can('delete', $role)) {
      $this->returnUnauthorized(); 
    }

    if(!Role::destroy($role->id)){
      return response()->json(['message' => 'Record not found'], 404);
    } 
    $data["data"]["role"] = null;
    return response()->json($data);
  }

  public function update(Role $role){
    if(!$this->request->user()->can('update', $role)) {
      $this->returnUnauthorized(); 
    }

    if($role->update($this->request->all())){
      $data["data"]["role"] = $role;
      return response()->json($data);
    }else{
      return response()->json(['message' => 'Record could not be updated'], 400);
    } 
  }
}
