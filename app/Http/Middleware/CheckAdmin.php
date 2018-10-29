<?php

namespace App\Http\Middleware;
use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
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

      if (Auth::user()->user_role!="admin") {

          return redirect('/home');
       }
        return $next($request);
    }
}
