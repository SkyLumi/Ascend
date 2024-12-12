<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        $user = Auth::user();

        if (!$user || ($role === 'admin' && !$user->is_admin) || ($role === 'user' && $user->is_admin)) {
            return redirect('/login'); // Redirect if unauthorized
        }

        return $next($request);
    }
}
