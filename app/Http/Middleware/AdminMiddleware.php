<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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


        if (Auth::user()->role_as == 'admin') {
            if (Auth::check() && Auth::user()->status) {
                $deactive = Auth::user()->status == '1';
                Auth::logout();

                if ($deactive == 1) {
                    $msg = "Your Account is Deactive. Please Contact Super Administrator.";
                }
                return redirect()->route('login')
                    ->with('error', $msg)
                    ->withErrors(['email' => 'Your Account is Deactive. Please Contact Super Administrator.']);
            }
            return $next($request);
        } else {
            return redirect('superadmin/dashboard');
        }
    }
}
