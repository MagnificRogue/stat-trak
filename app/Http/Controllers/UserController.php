<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller{


  protected $request;

  public function __construct(Request $request) {
    $this->request = $request;
  }

  public function index(){
    $data["data"]["users"] = User::all(); 
    return response()->json($data);
  }

  public function show(User $user){
    if(!$this->request->user()->can('view', $user)) {
      $this->returnUnauthorized(); 
    }

    $data["data"]["user"] = $user;
    return response()->json($data);
  }

  public function create(){
    if(!$this->request->user()->can('create', User::class)) {
      $this->returnUnauthorized(); 
    }

    if($user = User::create($this->request->only('name','email', 'password','company_id','permission'))){
     $data["data"]["user"] = $user;
     return response()->json($data);
    }else{
      return response()->json(['message' => 'Record could not be created'], 400);
    } 
  }

  public function destroy(User $user){
    if(!$this->request->user()->can('delete', $user)) {
      $this->returnUnauthorized(); 
    }

    if(!User::destroy($user->id)){
      return response()->json(['message' => 'Record not found'], 404);
    } 
    $data["data"]["user"] = null;
    return response()->json($data);
  }

  public function update(User $user){
    if(!$this->request->user()->can('update', $user)) {
      $this->returnUnauthorized(); 
    }

    if($user->update($this->request->all())){
      $data["data"]["user"] = $user;
      return response()->json($data);
    }else{
      return response()->json(['message' => 'Record could not be updated'], 400);
    } 
  }
}
