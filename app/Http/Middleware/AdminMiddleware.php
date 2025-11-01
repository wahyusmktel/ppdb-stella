<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login DAN apakah dia admin
        if (Auth::check() && Auth::user()->is_admin) {
            // Jika ya, lanjutkan request
            return $next($request);
        }

        // Jika tidak, tendang kembali ke halaman dashboard biasa
        return redirect('/dashboard');
    }
}
