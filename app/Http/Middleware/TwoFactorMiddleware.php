<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TwoFactorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();

        if (auth()->check() && $user->two_factor_code) {
            if ($user->two_factor_expires_at < now()) {
                $user->resetTwoFactorCode();
                auth()->logout();

                return redirect()->route('login', app()->getLocale())
                    ->withStatus(__('The two factor code has expired. Please login again.'));
            }

            if (!$request->routeIs('verify.index'))
            {
                return redirect()->route('verify.index', app()->getLocale());
            }
        }

        return $next($request);
    }
}
