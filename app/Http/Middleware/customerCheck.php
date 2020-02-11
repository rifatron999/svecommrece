<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class customerCheck
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
        /*if(Auth::user()->type == 'Customer')
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('customer.login');
        }*/

        if(Auth::user())
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('customer.login')->with('msg','⚠ You Must Login');
        }
    }
}
