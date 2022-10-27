<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Auth;

class UserProfileUpdate
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
        $user = \App\Models\UserProfile::where('user_id', Auth::user()->id)->first();
        if($user == null){
            return redirect('/dashboard/settings?type=name');
        }
        else{
            if($user->firstname == null || $user->middlename == null || $user->surname == null){
                return redirect('/dashboard/setting?type=name');
            }
            else{
                $verify = true;
                $fullname = $user->firstname.' '.$user->middlename.' '.$user->surname;
                return $next($request);
            }
        }
        return $next($request);
    }
}
