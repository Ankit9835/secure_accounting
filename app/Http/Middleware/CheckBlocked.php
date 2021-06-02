<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckBlocked
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->blocked_until && now()->lessThan(auth()->user()->blocked_until)) {
            $blocked_days = now()->diffInDays(auth()->user()->blocked_date); 
            $message = 'Your account has been suspended for '.$blocked_days.' '.str_plural('day', $blocked_days).'. Please contact administrator.';
            auth()->logout();     
            return redirect()->route('login')->withMessage($message); 
                   }           
        return $next($request);
    }
}
