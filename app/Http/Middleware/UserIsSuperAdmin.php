<?php

namespace App\Http\Middleware;

use Closure;

class UserIsSuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->user() || !$request->user()->is_super_admin){
          return response()->json(['message' -> 'Forbidden'], 403);   
        }
        return $next($request);
    }
}
