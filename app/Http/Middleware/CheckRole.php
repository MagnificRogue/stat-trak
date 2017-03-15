<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
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
        return new JsonResponse(['error' => 'Forbidden'], 403); 
      }

      // if the user doesn't have a permission, we're in a weird
      // situation and we should probably not let them
      // access the route anyway
      if(!$request->user()->permission){
        return new JsonResponse(['error' => 'Forbidden'], 403); 
      }
      
      // if the user of this middleware is trying to access
      // a permission that doesnt exist in the User::$permissions
      // then we should also forbid anything from happening
      if (array_search($role, array_keys(User::$permissions)) === false) {
        return new JsonResponse(['error' => 'Forbidden'], 403); 
      }

      // If the user doesn't at least have the chosen permissions level, throw error 
      if( User::$permissions[$request->user()->permission] <  User::$permissions[$role]) {
        return new JsonResponse(['error' => 'Forbidden'], 403); 
      }
          
      return $next($request);
    }
}
