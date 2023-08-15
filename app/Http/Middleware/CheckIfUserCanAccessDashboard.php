<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckIfUserCanAccessDashboard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check())
            return route('user.login');

        $user = Auth::user();

        if (!$user->can("access_admin_dashboard") && !$user->can("access_user_dashboard"))
            abort(403);


        if (!$user->can("access_user_dashboard") || $user->hasRole("Super Admin"))
            return redirect()->route("admin.home");


        return $next($request);
    }
}
