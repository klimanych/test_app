<?php


namespace Src\Products\Middleware;



use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CanEditProductMiddleware
{
    public function handle(Request $request, \Closure $next): Response
    {
        if(config('products.role') != 'admin') {
            return redirect()->back()->withErrors('У вас нет прав для совершения данного действия');
        }
        return $next($request);
    }
}
