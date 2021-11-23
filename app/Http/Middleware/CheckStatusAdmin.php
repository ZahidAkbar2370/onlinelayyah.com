<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckStatusAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!empty(auth()->user()) && auth()->user()->status == 'admin') {
                return $next($request);
        }

        return redirect("/");
    }
}
