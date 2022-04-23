<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class IsStudent
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
            return redirect()->route('student-login');
        }else{
            if(auth()->user()->status == 1){
                try
                {
                    if(auth()->user()->role_name != 'Student')
                    {
                        Auth::logout();
                        return redirect()->route('student-login');
                    }
                    if(auth()->user()->status == 1){
                         return $next($request);
                    }else{
                        Auth::logout();
                        session()->flash('error','your has been deactivate.please contact administrator');
                        return redirect()->route('student-login');
                    }     
                } catch(\Thowable $th) {
                    return redirect()->route('Student-login');
                }
            }else{
                Auth::logout();
                return redirect()->route('student-login'); 
            }    
        }     
    }
}
