<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

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
        switch ($guard)
        {
            case 'bookshops':
                if (Auth::guard($guard)->check())
                {
                    return redirect()->route(RouteServiceProvider::BOOKSHOPDASHBOARD);
                }
                break;
            case 'libraries':
                if (Auth::guard($guard)->check())
                {
                    return redirect()->route(RouteServiceProvider::LIBRARYDASHBOARD);
                }
                break;
        }
        

        /**if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::READERDASHBOARD);
        }**/

        return $next($request);
    }
}
