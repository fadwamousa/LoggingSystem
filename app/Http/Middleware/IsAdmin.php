<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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

         $user = Auth::user();
         //get the data about the user who Log in the app

        if(!$user->isAdmin()){
            //isAdmin the method in User Model 

           //return redirect()->intended('/admin');
            return redirect('/');
        }
        return $next($request);
    }
}
