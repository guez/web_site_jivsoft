<?php

namespace App\Http\Middleware;

use App\Models\Visit;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class VisitsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $route = Route::getCurrentRoute();

        $requestHost = new Request([
            'host' =>   $request->header('host'),
            'userAgent'  => $request->header('user-agent'),
            'url'  =>   $route->uri(),
            'ip'    => $request->ip(),
        ]);

        Visit::storeRecord($requestHost);

        return $next($request);
    }
}
