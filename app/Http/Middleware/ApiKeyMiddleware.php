<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiKeyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
            

            $apiKey = $request->input('api_key');
            $validApiKey = env('API_KEY');
        
            if ($apiKey !== $validApiKey) {
                return response()->json(['error' => $validApiKey], 401);
            }
        
            return $next($request);
        
    }
}
