<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session::has('locale') && in_array(Session::get('locale'), ['en', 'zh_CN'])) {
            App::setLocale(Session::get('locale'));
        } else {
            App::setLocale('zh_CN');
        }

        return $next($request);
    }
}
