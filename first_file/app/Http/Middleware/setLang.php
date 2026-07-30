<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class setLang
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "setLang middleware is working";
        if($request->session()->get('lang')){
            \App::setLocale($request->session()->get('lang')); // set the default language to English if no language is set in the session
            
        }

        return $next($request);
    }
}
