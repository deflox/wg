<?php

namespace App\Http\Middleware;

use App\Services\WgSessionService;
use Closure;
use Illuminate\Http\Request;

class WgSessionMiddleware
{
    private WgSessionService $wgSessionService;

    public function __construct(WgSessionService $wgSessionService)
    {
        $this->wgSessionService = $wgSessionService;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($this->wgSessionService->expired()) {
            return redirect()->route('index');
        }

        return $next($request);
    }
}
