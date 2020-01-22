<?php

namespace App\Http\Middleware;

use Closure;

class PremiumAccess
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
        // TODO @laravel-test
        if ($request->input('b') > 0)
        {
            return $next($request);
        }
      //  return redirect('/')->with('error','You have not admin access');
   //   throw new Exception('Division by zero.');
        abort(520, 'b parameter does not allow a 0 value.');
    }
}
