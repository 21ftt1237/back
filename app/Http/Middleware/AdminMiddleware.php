<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class AdminMiddleware
{
    
public function handle($request, Closure $next)
{
    if ($request->user() && $request->user()->isAdmin()) {
        return $next($request);
    }

    abort(403, 'Unauthorized access');
}
}
