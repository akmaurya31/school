<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class IsAdmin
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
        if (false == Auth::check()) {
            return redirect()->route('admin-login');
        }else{
            try
            {
                if(auth()->user()->role_name != 'Admin')
                {
                    Auth::logout();
                    return redirect()->route('admin-login');
                }
                return $next($request);
            } catch(\Thowable $th) {
                return redirect()->route('admin-login');
            }   
        }     
    }
}
