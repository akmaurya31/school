<?php
namespace App\Http\Middleware;
use Closure;
use Auth;
class IsReceptionist
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
        if (!Auth::check()) {
            return redirect()->route('reception-login');
        }else{
            if(auth()->user()->status == 1){
                try
                {
                    if(auth()->user()->role_name != 'Receptionist')
                    {
                        Auth::logout();
                        return redirect()->route('reception-login');
                    }
                    if(auth()->user()->status == 1){
                         return $next($request);
                    }else{
                        Auth::logout();
                        return redirect()->route('reception-login');
                    }     
                } catch(\Thowable $th) {
                    return redirect()->route('reception-login');
                }
            }else{
                Auth::logout();
                return redirect()->route('reception-login');
            }    
        }     
    }
}
