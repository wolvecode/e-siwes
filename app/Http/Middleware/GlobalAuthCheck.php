<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GlobalAuthCheck
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
        $guards = ['user', 'student'];

        foreach ($guards as $guard) {
            if (auth($guard)->check()) {
                return $next($request);
            }
        }

        return redirect()->route('login');
    }
}
