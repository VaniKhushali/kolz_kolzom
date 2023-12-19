<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class IsUser
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
        if(Session::has('user'))
        {
            $user = json_decode(Session::get('user'),true);   
        }else{
            $user = [];
        }
        if (count($user) > 0 && 
                ($user[0]['user_type'] == 'customer' || 
                $user[0]['user_type'] == 'seller' || 
                $user[0]['user_type'] == 'delivery_boy') ) {
            
            return $next($request);
        }
        else{
            session(['link' => url()->current()]);
            return redirect()->route('user.login');
        }
    }
}
