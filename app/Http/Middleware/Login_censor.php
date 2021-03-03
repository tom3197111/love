<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Support\Facades\Gate;
// use Illuminate\Support\Facades\Hash;
class Login_censor
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
        // dd(Hash::make('a0917951311'));

        if (!Auth::check()) {
            return redirect('home');
        }

        if (Gate::denies('admin')) {
            return redirect('grade_Low');
        }

        return $next($request);
    }
}
