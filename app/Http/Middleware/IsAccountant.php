<?php
namespace App\Http\Middleware;
use Closure;
use Auth;
class IsAccountant
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
            return redirect()->route('accounts-login');
        }else{
            if(auth()->user()->status == 1){
                try
                {
                    if(auth()->user()->role_name != 'Accountant')
                    {
                        Auth::logout();
                        return redirect()->route('accounts-login');
                    }
                    if(auth()->user()->status == 1){
                         return $next($request);
                    }else{
                        Auth::logout();
                        return redirect()->route('accounts-login');
                    }     
                } catch(\Thowable $th) {
                    return redirect()->route('accounts-login');
                }
            }else{
                Auth::logout();
                return redirect()->route('accounts-login');
            }    
        }     
    }
}
