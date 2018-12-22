<?php

namespace App\Http\Middleware;

use Closure;

class VerifyAdmin
{
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
