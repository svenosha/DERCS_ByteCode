<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsRider
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     //check if the user has rider access
    //is_rider=0 refer to customer and is_rider=1 refer to rider
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->is_rider == 1){
            return $next($request);
        }
   
        return redirect(‘welcome’)->with(‘error’,"You don't have rider access.");
    }
}
