<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use \App\User;
use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
      // if the user isn't logged in, throw error
      if(!$request->user()){
        return response()->json(['error' => 'Forbidden'], 403); 
      }
      
      // If the user doesn't at least have the chosen permissions level, throw error 
      if( User::$permissions[$request->user()->permission] <  User::$permissions[$role]) {
        return response()->json(['error' => 'Forbidden'], 403); 
      }
          
      return $next($request);
    }
}
