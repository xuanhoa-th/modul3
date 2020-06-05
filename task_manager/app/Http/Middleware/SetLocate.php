<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use MongoDB\Driver\Session;

class SetLocate
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
        if (!Session::has('locateLanguage')){
            Session::put('locateLanguage', config('app.locateLanguage'));
        }

        App::setLocale(Session::get('locateLanguage'));
        return $next($request);
    }
}
