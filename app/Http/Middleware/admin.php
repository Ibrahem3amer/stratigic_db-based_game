<?php

namespace App\Http\Middleware;

use Closure;

class admin
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

        if ( \Auth::check() && 
            ( \Auth::user()->user_forum_id == 51 || \Auth::user()->user_forum_id == 115 ))
        {
            return $next($request);
        }

        return redirect('/');

    }
}
