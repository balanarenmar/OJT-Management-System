<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if ($user) {
            if ($this->isAdminView($request)) {
                if ($user->account_type === 'admin') {
                    return $next($request);
                } else {
                    return redirect()->route('admin-login')->with('error', 'You are not a student.');
                }
            } elseif ($this->isStudentView($request)) {
                if ($user->account_type === 'student') {
                    return $next($request);
                } else {
                    return redirect()->route('admin-dashboard')->with('error', 'You do not have permission to access this page.');
                }
            }
        }

        return redirect('login');
    }

    private function isAdminView($request)
    {
        $path = $request->path();
        return strpos($path, 'admin/') === 0;
    }

    private function isStudentView($request)
    {
        $path = $request->path();
        return strpos($path, 'student/') === 0;
    }
}
