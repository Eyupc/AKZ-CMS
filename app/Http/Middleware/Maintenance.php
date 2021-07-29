<?php

namespace App\Http\Middleware;

use App\utils\Configuration;
use Closure;
use Illuminate\Http\Request;

class Maintenance
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
        if (Configuration::maintenance) {
            if(auth()->user() && auth()->user()->rank >= Configuration::maintenanceMinRank){
            return $next($request);
            }else {
            return redirect('/maintenance');
            }
        } else {
            return $next($request);
        }
    }
}
