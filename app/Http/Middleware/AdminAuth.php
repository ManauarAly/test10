<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Session::has('adminId'))
        {
            //return redirect('board-admin/login')->with('error','Please Login first');
            return redirect()->route('adminLogin')->with('error','Please Login first');
        }
        return $next($request);
    }
}
