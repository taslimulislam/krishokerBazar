<?php

namespace App\Http\Middleware;

use Closure;

class VerifyUserType
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

        $user = session('user'); //geting value form session user detail
        if($user->type != 'user')
        {
            return redirect(route('login.create'));
        }
        return $next($request);
    }
}
