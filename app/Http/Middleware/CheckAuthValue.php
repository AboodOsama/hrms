<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAuthValue
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
        // Check if the user is authenticated and the `auth` column is equal to 1
        if (Auth::check() && Auth::user()->auth == 1) {
            return $next($request);
        }

        // If the user's `auth` value is not 1, return a response with a JavaScript alert and redirect
        $errorMessage = "Unauthorized access. You do not have permission to view this page.";
        $script = "<script type='text/javascript'>
                     alert('".addslashes($errorMessage)."');
                     window.location = '/';
                   </script>";
        return response($script);
    }
}
