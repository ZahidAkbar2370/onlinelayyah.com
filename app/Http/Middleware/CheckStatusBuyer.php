<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckStatusBuyer
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
        if (!empty(auth()->user()) || auth()->user()->status == 'buyer') {
                return $next($request);
        }

        return redirect("/");
    }
}
