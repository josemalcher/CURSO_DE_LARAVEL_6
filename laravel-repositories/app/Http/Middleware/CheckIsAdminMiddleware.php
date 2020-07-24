<?php

namespace App\Http\Middleware;

use Closure;

class CheckIsAdminMiddleware
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

        $user = auth()->user();
        //if($user->email != 'contatod@josemalcher.net'){
        if(!in_array($user->email, ['contato@josemalcher.net', 'outroemail@teste.com'])){
            redirect('/');
        }

        return $next($request);
    }
}
