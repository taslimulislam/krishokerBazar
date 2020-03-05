<?php

namespace App\Http\Middleware;

use Closure;

class VerifyUserLoggedSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(session('loggedUser') != true)
        {
            // $request->session()->put("curl1",url()->current());
            return redirect(route('login.create'));
        }
        return $next($request);
    }
}
