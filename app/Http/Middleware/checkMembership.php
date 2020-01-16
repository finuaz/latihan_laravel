<?php

namespace App\Http\Middleware;

use Closure;

class checkMembership
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
        if($request->membership==true){
            return $next($request);
        }
        else return null;
    }
}
