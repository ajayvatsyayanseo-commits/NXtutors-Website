<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Register;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('userid')) {
            $user = Register::where('user_id', session()->get('userid'))->first();
            view()->share('user', $user);
        }

        return $next($request);
    }
}
