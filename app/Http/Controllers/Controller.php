<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Controller extends BaseController{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    protected function returnUnauthorized() {
      return response()->json(['error' => 'Forbidden'], 403); 
    }
}
