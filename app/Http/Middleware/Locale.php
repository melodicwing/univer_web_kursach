<?php

namespace App\Http\Middleware;

use Closure;
use \Illuminate\Http\Request;

class Locale
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
		// var_dump(explode('/', $request->path()));
		$parts = explode('/', $request->path());
		if ( in_array($parts[0], get_langs())) {
			\App::setLocale($parts[0]);
		}
		// if ($parts[0]) {
		// 	\App::setLocale($parts[0]);
		// }
		return $next($request);
	}
}
