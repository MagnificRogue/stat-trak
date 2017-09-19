<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class AuthenticateController extends Controller{


  //sign in method, returns the user in the body and the JWT in the header

  public function authenticate(Request $request){
    $credentials = $request->only('email', 'password');
    try {
      if(! $token = JWTAuth::attempt($credentials)){
        return response()->json(['error' => 'invalid_credentials'], 401);
      }
    } catch (JWTException $e) {
      return response()->json(['error' => 'could_not_create_token'], 500);
    }
    //
    $data = array();
    $data["user"] = User::where("email",$request->only('email'))->first();
    return response($data)
                    ->withHeaders([
                      'Authorization'=> 'Bearer: '.$token
                   ]);
  }  

  //refresh route for the front end
  public function user(){
    $user = JWTAuth::parseToken()->toUser();
    $token = JWTAuth::getToken(); 
    $data = array();
    $data["user"] = $user;
    return response($data)->withHeaders([
                      'Authorization'=> 'Bearer: '.$token
                   ]);
  }

  //signs out user by invalidating their token
  public function invalidate(){
    JWTAuth::parseToken()->invalidate(); 
  }
}
