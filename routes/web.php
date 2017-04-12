<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It"s a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//authentication route
Route::post("/users/sign_in","AuthenticateController@authenticate");
Route::group(["middleware" =>["jwt.auth"]],function(){
  
  //authentication route
  Route::post("/users/sign_out","AuthenticateController@invalidate");
  
  //user routes
  Route::get("/users/create/","UserController@create");
  Route::get("auth/user","AuthenticateController@user");
  Route::get("auth/refresh","AuthenticateController@user");
  Route::get("/users","UserController@index");
  Route::get("/users/{user}","UserController@show");
  Route::delete("/users/{user}","UserController@destroy");
  Route::put("/users/{user}","UserController@update");

  //company routes
  Route::get("/companies/create/","CompanyController@create");
  Route::get("/companies","CompanyController@index");
  Route::get("/companies/{company}","CompanyController@show");
  Route::delete("/companies/{company}","CompanyController@destroy");
  Route::put("/companies/{company}","CompanyController@update");

  //roles routes
  Route::get("/roles/create/","RoleController@create");
  Route::get("/roles","RoleController@index");
  Route::get("/roles/{role}","RoleController@show");
  Route::delete("/roles/{role}","RoleController@destroy");
  Route::put("/roles/{role}","RoleController@update");

  //metrics routes
  Route::get("/metrics/create/","MetricController@create");
  Route::get("/metrics","MetricController@index");
  Route::get("/metrics/{metric}","MetricController@show");
  Route::delete("/metrics/{metric}","MetricController@destroy");
  Route::put("/metrics/{metric}","MetricController@update");

  //instances routes
  Route::get('/instances','MetricRoleInstanceController@index');
  Route::get('/instances/create','MetricRoleInstanceController@create');
  Route::get('/instances/{metric_role_instance}','MetricRoleInstanceController@show');
  Route::delete('/instances/{metric_role_instance}','MetricRoleInstanceController@destroy');
  Route::put('/instances/{metric_role_instance}','MetricRoleInstanceController@update');
   
  // routes to query models and bring in all of their relations
  Route::get("/full/{model}/{id}", "ApiConvenienceController@show");
  
});


