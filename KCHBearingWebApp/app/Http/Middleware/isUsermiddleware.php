<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

//new added 23/03/2023

use Illuminate\Support\Facades\Auth;

// class isUsermiddleware
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
//      */
//     public function handle(Request $request, Closure $next): Response
//     {
//         if(Auth::check() && Auth::user()->roles == 2){
//             return $next($request);
//         }
//         else{
//             return redirect()->route('login');
//         }
//     }
// }

class isUsermiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Then add function to check if its user
        if(Auth::check() && Auth::user()->role == 2){
            return $next($request);
        } else{
            return redirect()->route('login');
        }
        //then dont forget to register to kernel middleware
    }
}

