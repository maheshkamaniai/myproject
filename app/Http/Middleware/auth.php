<?php

namespace App\Http\Middleware;

use Closure;

class auth
{
   
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
