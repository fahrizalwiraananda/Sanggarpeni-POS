<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PosController extends Controller
{
    public function index()
    {
        return view('kasir.pos')->with([
            'user' => Auth::user(),
        ]);
    }
}
