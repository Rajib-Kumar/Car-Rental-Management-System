<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use App\Http\Middleware\Session;

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
        if($request->session()->has('user'))
        {
            if(session::get('user')->role == "admin")
                {
                    return $next($request);
                }
            
        }
        /*elseif($request->session()->has('admin'))
        {
            return $next($request);
        }*/
        else
        {
            return redirect('/login');
        }
        
    }
}