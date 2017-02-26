<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ApiConvenienceController extends Controller
{
  protected $request;

  public function __construct(Request $request) {
    $this->request = $request;
  }

  public function show($model, $id) {
    //Grab the name of the model and its namespace
    // e.g. 'companies' -> 'Company'
    $modelClassName =  Str::ucfirst(Str::singular($model));
    $modelClassName = "\App\\".$modelClassName; 

    // if the class doesn't exist the client dun' goofed and we should let them know about that
    if(! class_exists($modelClassName)) { 
      return response()->json(['message' => 'Resource Does Not Exist'], 400);
    }

    // If the class isn't actually an instance of a model, assume the client dun' goofed too
    if( !is_subclass_of($modelClassName, Model::class, true)){
      return response()->json(['message' => 'Resource Does Not Exist'], 400);
    }

    // Now that we have the promise that there exists a model in our namespace
    // that we can make this query, lets get to it

    try {
      $q = $modelClassName::where('id', $id);

      if(property_exists($modelClassName, 'fullWith')) {
        $q = $q->with($modelClassName::$fullWith); 
      }  
      
      $q = $q->firstOrFail();
      
      $data["data"][Str::singular($model)] = $q;
      return response()->json($data);

    } catch(ModelNotFoundException $e) {
      return response()->json(['message' => 'Resource not found'], 404); 
    }

  }
}
