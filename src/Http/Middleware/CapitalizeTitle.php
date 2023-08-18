<?php

namespace Blessing\BrandsplashPackage\Http\Middleware;

use Closure;

class CapitalizeTitle
{
    public function handle($request, Closure $next)
    {
        // if ($request->has('title')) {
        //     $request->merge([
        //         'title' => ucfirst($request->title)
        //     ]);
        // }
        dd('My middleware running');
        return $next($request);
    }
}

?>