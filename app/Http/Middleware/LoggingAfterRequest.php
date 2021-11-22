<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LoggingAfterRequest
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
        return $next($request);
    }

    public function terminate($request, $response)
	{
        Log::info('URL: ' . $request->fullUrl());
        Log::info('Method: ' . $request->getMethod());
        Log::info('IP Address: ' . $request->getClientIp());
        Log::info('Status Code: ' . $response->getStatusCode());
	}
}
