<?php

namespace App\Http\Middleware\Admin;

use App\User;
use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (\Auth::user()->profile == array_search('MONITOR', User::PROFILES)) {
            abort(403, 'Você não tem permissão para acessar essa página!');
        } else {
            return $next($request);
        }
    }
}
