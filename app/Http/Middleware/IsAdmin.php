<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     public function isAdmin($user_type){
        return $user_type === 2;
     }
    public function handle(Request $request, Closure $next): Response
    {
        
            if(!Auth::check()){
            return redirect()->route('error');
            }
            $user = Auth::user();
        
        if ($user && $this->isAdmin($user->user_type)) {
            return $next($request);
        }
    return redirect()->route('error');
    }  
}