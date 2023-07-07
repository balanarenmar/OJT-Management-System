<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

                // return redirect(RouteServiceProvider::HOME); //old code
                $userType = Auth::user()->account_type;
                if ($userType == 'admin') {
                    return redirect()->route('admin-dashboard')->with('auth_pass', 'You are already logged in as admin.');
                    //return redirect('admin-dashboard');
                } elseif ($userType == 'student') {
                    return redirect()->route('student-dashboard')->with('auth_pass', 'You are already logged in as student.');
                    //return redirect('student-dashboard');
                }
            }
        }

        return $next($request);
    }
}
