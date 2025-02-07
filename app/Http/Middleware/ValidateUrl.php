<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateUrl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $url = $request->input('img_url');

        if (!filter_var($url, FILTER_VALIDATE_URL)){
            return response()->json([
                "error" => 'La URL no es valida'
            ],400);
        }

        return $next($request);
    }
}
