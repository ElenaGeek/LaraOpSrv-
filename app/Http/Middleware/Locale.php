<?php

namespace App\Http\Middleware;

use Closure;

class Locale
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

        // dd(\Session::all());
        // dd(\Session::exists('locale'));

        // dd(\App::setLocale(\Session::get('locale')));

        if(\Session::exists('locale'))
        {
            \App::setLocale(\Session::get('locale'));
        }
        return $next($request);
    }
}
