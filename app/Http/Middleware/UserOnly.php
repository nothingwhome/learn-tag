<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserOnly
{
    public function handle(Request $request, Closure $next)
    {
        // belum login
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Silakan login dulu');
        }

        // bukan role user
        if (Auth::user()->role !== 'user') {
            abort(403, 'Anda tidak memiliki akses');
        }

        return $next($request);
    }
}

