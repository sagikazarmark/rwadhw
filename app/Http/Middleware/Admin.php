<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

final class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    final public function handle(Request $request, Closure $next)
    {
        if (!$request->user()->isAdmin()) {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
