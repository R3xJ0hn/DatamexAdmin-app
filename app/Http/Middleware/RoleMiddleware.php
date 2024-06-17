<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role): Response
    {
        $user = $request->user();

        if ($user && $user->role && $user->role === $role) {
            return $next($request);
        }

        return redirect('/unauthorized');
    }


}
