<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\App;
class Localization
{
    /**
     * 
     * Handle an incoming request.
     * 
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next)
    {
        // Get the first segment of the URL
        $locale = $request->segment(1);
        
        // Get the default locale from the config and the supported locales
        $defaultLocale = config('app.locale');
        $supportedLocales = ['en', 'nl', 'fy'];

        // If no locale present in the URL, redirect to the locale stored in the cookies, if not in cookies, then use the default locale and store in cookies
        if (!in_array($locale, $supportedLocales)) {
            $locale = $request->cookie('locale', $defaultLocale);
            return redirect($locale . '/' . $request->path());
        }

        // If the locale is supported, set it and store it in cookies
        if (in_array($locale, $supportedLocales)) {
            App::setLocale($locale);
            URL::defaults(['locale' => $locale]);
            $response = $next($request);
            return $response->withCookie(cookie('locale', $locale, 43200)); // 43200 minutes = 30 days
        }

        // If the locale is not supported, abort with a 404 error
        abort(404);
    }
}