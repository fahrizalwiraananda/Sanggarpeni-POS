<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = new Produk();

        $kasir = User::all();

        //return 'test';
        $barang = Produk::where('stok', '<=', '5')->get();
        $userdt = User::where('status', '=', 'Request')->get();//Maksed guna mengambil seluruh data pada warga
        // dd($warga); //cek data dapat diakses
        
        return view('admin.dashboard', ['produk' => $barang], compact(['userdt','produk', 'kasir']))->with([
            'user' => Auth::user(),
        ]);
    }
}
