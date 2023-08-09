<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class RedirectUserToDashboard
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
        if ($user->can("access_admin_dashboard"))
            return redirect()->route("admin.home");
        else if ($user->can("access_user_dashboard"))
            return redirect()->route("user.home");
        else
            abort(403);

        return $next($request);
    }
}
