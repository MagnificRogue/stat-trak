<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//authentication route
Route::post("/users/sign_in",'AuthenticateController@authenticate');
Route::group(["middleware" =>["jwt.auth"]],function(){
  
  //authentication route
  Route::post('/users/sign_out','AuthenticateController@invalidate');
  
  //user routes
  Route::get("/users/create/","UserController@create");
  Route::get("/users",'UserController@index');
  Route::get("/users/{user}",'UserController@show');
  Route::delete("/users/{user}",'UserController@destroy');
  Route::put("/users/{user}",'UserController@update');

  //company routes
  Route::get("/companies/create/","CompanyController@create");
  Route::get("/companies",'CompanyController@index');
  Route::get("/companies/{company}",'CompanyController@show');
  Route::delete("/companies/{company}",'CompanyController@destroy');
  Route::put("/companies/{company}",'CompanyController@update');

});





