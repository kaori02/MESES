<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) 
        {
            if(Auth::user()->isKamiSama()) return redirect('/tutor');
            if(Auth::user()->isSubbed()) return redirect('/');
            return redirect('/pembayaran/create');
        }

        return $next($request);
    }
}
