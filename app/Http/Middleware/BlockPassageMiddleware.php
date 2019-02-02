<?php

namespace App\Http\Middleware;

use Closure;

class BlockPassageMiddleware
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
	return view("auth.passwords.h");
       	 //return abort(404);
	//App\Http\Middleware\BlockPassageMiddleware 
	//return $next($request);
    }
}
