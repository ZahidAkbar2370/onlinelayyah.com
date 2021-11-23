<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPublicationStatus
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
        if (!empty(auth()->user()) && auth()->user()->publication_status == '1') {
            return $next($request);
            
        }
        else if (!empty(auth()->user()) && auth()->user()->publication_status == '0') {
            return response()->json('Your Account is Inactive');
        }

        return redirect("login");

    }
}
