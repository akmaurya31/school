<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class IsParent
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
            return redirect()->route('parent-login');
        }else{
            if(auth()->user()->status == 1){
                try
                {
                    if(auth()->user()->role_name != 'Parent')
                    {
                        Auth::logout();
                        return redirect()->route('parent-login');
                    }
                    return $next($request);
                } catch(\Thowable $th) {
                    return redirect()->route('parent-login');
                }
            }else{
               Auth::logout();
               return redirect()->route('parent-login'); 
            }
        }     
    }
}
