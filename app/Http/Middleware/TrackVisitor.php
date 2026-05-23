<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Only track if cookie consent is accepted and not an admin route
        if ($request->cookie('cookie_consent') === 'accepted' && !$request->is('admin*') && !$request->is('login*')) {
            Visitor::create([
                'session_id' => session()->getId(),
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'page_url' => $request->fullUrl(),
            ]);
        }

        return $next($request);
    }
}
