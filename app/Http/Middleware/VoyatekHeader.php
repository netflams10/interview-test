<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VoyatekHeader
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $header = $request->header('Authorization');
        if ($header !== "vg@123") {
            return response()->json(['message' => "This route is unauthorized", 'status' => false], Response::HTTP_UNAUTHORIZED);
        }
        return $next($request);
    }
}
