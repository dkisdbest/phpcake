<?php

namespace phpcake\Authorization\Middleware;
use Closure;
use phpcake\Authorization\Facades\Authorization;

class AuthorizationMiddleware
{
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}