<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Register;

class TeacherMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('userid')) {
            $user = Register::where('user_id', session()->get('userid'))->first();
            view()->share('teacher', $user);
        }

        return $next($request);
    }
}
