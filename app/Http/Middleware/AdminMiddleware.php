<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

if(Auth::check()) {
    if(Auth::admins()->role_id == '1'{
        return $next($request);
            } else {
                return redirect('/dashboard')->with('message', 'Access denied as you are not an admin');
            }
        } else {
                return redirect('/login')->with('message', 'Login to access the website info');
        }

        return $next($request);
    }
}
