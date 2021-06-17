<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Illuminate\Http\Request;

class AdminViewUnAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        {
            $user = Auth::user();
            if($user)
            {
                if($user->user_type=='admin'){

                    return redirect('admindashbord');

                }
                else{
                return redirect('userdashbord');

                }
                
            }
            return $next($request);
    
        }
    }
}
