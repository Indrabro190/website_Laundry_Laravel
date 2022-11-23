<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Checklevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        if(in_array($request->user()->level,$levels)){
            return $next($request);
        }
        return redirect('/laundry');
    }
}
