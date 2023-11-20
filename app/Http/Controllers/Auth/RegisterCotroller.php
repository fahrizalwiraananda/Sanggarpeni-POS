<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function create(Request $request)
    {
        $validateData = $request->validate([

            'name' => ['required', 'max:100'],
            'email' => ['required', 'email:rfc,dns'],
            'password' => ['required', 'min:6', 'max:100']
            
        ]);


        $name = $validateData['name'];
        $email = $validateData['email'];
        $password = $validateData['password'];
      

        $user = new User();
        $finduser = $user->where('email', $email)->first();
        if ($finduser) {
            return redirect('/register')->withErrors([
                'email' => 'Email was registered !'
            ]);
        }


        $user->create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password)

        ]);

        Auth::attempt([
            'email' => $email,
            'password' => $password
        ]);

        return redirect('/register');
    }
}