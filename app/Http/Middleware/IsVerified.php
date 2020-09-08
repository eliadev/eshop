<?php

namespace App\Http\Middleware;

use Closure;

class IsVerified
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
        if(!auth()->user()->is_verified)
            return redirect()->route('cart.index')->with(session()->flash('alert_msg', 'You must be verified!'));

        return $next($request);
    }
}
