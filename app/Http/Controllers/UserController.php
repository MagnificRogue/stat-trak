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
    return $data["data"]["users"] = User::all();; 
  }

  public function show(User $user){
    return $data["data"]["user"] = $user;
  }

  public function create(){
    if($user = User::create($this->request->only('name','email', 'password','company_id'))){
      return $data["data"]["user"] = $user;
    }else{
      return response()->json(['message' => 'Record could not be created'], 400);
    } 
  }

  public function destroy($id){
    if(!User::destroy($id)){
      return response()->json(['message' => 'Record not found'], 404);
    } 
    return $data["data"]["user"] = null;
  }

  public function update(User $user){
    if($user->update($this->request->all())){
     return  $data["data"]["user"] = $user;
    }else{
      return response()->json(['message' => 'Record could not be updated'], 400);
    } 
  }

}
