<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class CheckRole
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
        //jika akun yang login sesuai dengan role 
    //maka silahkan akses
    //jika tidak sesuai akan diarahkan ke home

    $roles = array_slice(func_get_args(), 2);

    foreach ($roles as $role) { 
        $user = Auth::user()->role;
        if( $user == $role){
            return $next($request);
        }
    }

    return redirect('/');
    }
}
