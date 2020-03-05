<?php

namespace App\Http\Middleware;

use Closure;

class VerifyAdminType
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

        $admin = session('admin'); //geting value form session user detail
        if($admin->type != 'admin')
        {
            return redirect(route('adminLogin.create'));
        }
        return $next($request);
    }
}
