<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckScope
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$scope="Admin")
    {
        if(Auth::user()->scope){
            if(Auth::user()->scope->name==$scope)
                return $next($request);
        }

        dd('You Are Not '.$scope);
    }
}
