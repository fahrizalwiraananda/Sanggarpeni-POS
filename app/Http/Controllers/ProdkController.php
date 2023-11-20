<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //mengkonfirmasi level user setelah login
    public function index(){
        if ($user = Auth::user()) {
            if ($user->level == '1') {
                return redirect()->intended('dashboard');
            } elseif ($user->level == '2') {
                return redirect()->intended('pos');
            }
        }
        
        return view('auth.login');
    }

    //membuat validasi
    public function proses(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],
        ['username.required' => 'Username tidak boleh kosong !',
        'password.required' => 'Password tidak boleh kosong !']
        );

        //untuk memastikan kebenaran username dan paaword
        $kredensial = $request->only('username', 'password');

        if(Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
                if ($user->level == '1') {
                    return redirect()->intended('dashboard');
                } elseif ($user->level == '2') {
                    return redirect()->intended('pos');
                }
            

            return redirect()->intended('/');
        }

        //jika salah satu salah input maka akan error
        return back()->withErrors([
            'username' => 'Maaf username atau password anda salah !'
        ])->onlyinput('username');
    }

    //Penghapusan session login
    public function logout(Request $request){
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
