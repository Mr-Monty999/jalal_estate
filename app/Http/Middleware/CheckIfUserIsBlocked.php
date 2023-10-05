<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIfUserIsBlocked
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
        $user = auth()->user();

        $latestBlock = $user
            ->blocks()
            ->latest()
            ->first();

        if ($latestBlock && $latestBlock->expired_at > now() && $latestBlock->status == 'block') {
            echo view("user.messages.block");
            die;
        }

        return $next($request);
    }
}
