<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class LoginUserOrder
{
    private $loginOrder;

    public function __construct()
    {
    }

    public function handle($request, Closure $next, $guard= 'loginOrder')
    {

        if (Auth::guard($guard)->check()){
            return $next($request);
        }
        return redirect()->route('index')->with('error','Ban can phai dang nhap');

    }
}
