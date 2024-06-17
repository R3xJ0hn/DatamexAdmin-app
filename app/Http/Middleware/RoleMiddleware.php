<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{

    public function handle(Request $request, Closure $next, $role = null): Response
    {
        $user = $request->user();

        if ($role === null) {

            if ($user->hasRole('admin')){
                return redirect()->route('admin.dashboard');
            }

            elseif ($user->hasRole('registrar')) {
                return redirect()->route('registrar.dashboard');
            }

        }

        else {
            if ($user && $user->role && $user->role === $role) {
                return $next($request);
            }
        }

        abort(403, 'Unauthorized action.');
    }
}
