<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;

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
    $data["data"]["user"] = $user;
    return response()->json($data);
  }

  public function create(){
    if($user = User::create($this->request->only('name','email', 'password','company_id','permission'))){
      $data["data"]["user"] = $user;
      return response()->json($data);
    }else{
      return response()->json(['message' => 'Record could not be created'], 400);
    } 
  }

  public function destroy($id){
    if(!User::destroy($id)){
      return response()->json(['message' => 'Record not found'], 404);
    } 
    $data["data"]["user"] = null;
    return response()->json($data);
  }

  public function update(User $user){
    $pw = $this->request->only('originalPassword')['originalPassword'];

    // if the password doesn't match and the user is not an admin this person should not be updating shit!
    // TODO: Make sure that if the user is just an admin that the belong to the user being updates company
    if(!Hash::check($pw, $user->password) && User::$permissions[$user->permission] <  User::$permissions['admin'] ){
      return response()->json(['message' => 'Password does not match current user\'s password.'], 400);
    }
    if($user->update($this->request->all())){
      $data["data"]["user"] = $user;
      return response()->json($data);
    }else{
      return response()->json(['message' => 'Record could not be updated'], 400);
    } 
  }
}
