<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class IsTeacher
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
            return redirect()->route('teacher-login');
        }else{
            if(auth()->user()->status == 1){
                try
                {
                    if(auth()->user()->role_name != 'Teaching')
                    {
                        Auth::logout();
                        return redirect()->route('teacher-login');
                    }
                    if(auth()->user()->status == 1){
                         return $next($request);
                    }else{
                        Auth::logout();
                        return redirect()->route('teacher-login');
                    }     
                } catch(\Thowable $th) {
                    return redirect()->route('teacher-login');
                }
            }else{
                Auth::logout();
                return redirect()->route('teacher-login');
            }    
        }     
    }
}
