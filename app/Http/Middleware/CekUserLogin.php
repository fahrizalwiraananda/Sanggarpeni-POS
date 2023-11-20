<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

     //ada penambahan parameter rules untuk mengatur saat login dengan level apa
    public function handle(Request $request, Closure $next,$rules)
    {
        //jika tidak login akan masuk ke halaman login
        if(!Auth::check()){
            return redirect('login');
        }

        //untuk check level user
        $user = Auth::user();

        //jika ada level maka request diteruskan
        if($user->level == $rules)
            return $next($request);

            return redirect('login')->with('error', "Kamu tidak memiliki akses untuk halaman ini !");


    //Middleware didaftarkan ke kernel
    }
}
