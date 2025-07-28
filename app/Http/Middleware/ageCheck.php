<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ageCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Assume age is coming from the request (you can change this as needed)
        $age = $request->input('age');

        if ($age && $age >= 18) {
            return $next($request);
        }

        return response()->json(['message' => 'Access denied. Age must be greater than 18.'], 403);
    }
}
