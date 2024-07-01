<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // Check if the 'lang' parameter is in the request and set the locale accordingly.
         if ($request->has('lang')) {
            $locale = $request->get('lang');
            session(['locale' => $locale]);
        } else {
            // If no 'lang' parameter, use the session locale or default app locale.
            $locale = session('locale', config('app.locale'));
        }

        App::setLocale($locale);

        return $next($request);
    }
}
