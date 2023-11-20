<?php

namespace App\Http\Controllers\Penjualan;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Penjualan;
use App\Models\PenjualanDetail;
use App\Models\Produk;
use App\Models\Setting;
use Illuminate\Http\Request;

class PenjualanDetailController extends Controller
{
    public function index(){
        $produk = Produk::orderBy('nama_produk')->get();
        $member = Member::orderBy('name')->get();
        $diskon = Setting::first(); //->diskon ?? 0;

        // Cek apakah ada transaksi yang sedang berjalan
        if ($id_penjualan = session('id_penjualan')) {
            //$penjualan = Penjualan::find($id_penjualan);
            //$memberSelected = $penjualan->member ?? new Member();

           return view('transaksi-detail.index', compact('produk', 'member', 'diskon', 'id_penjualan'));
        } else {
            if (auth()->user()->level == 1) {
                return redirect()->route('transaksi-baru');
            } else {
                return redirect()->route('home');
           }
        }
    }

    public function data($id)
    {
        $detail = PenjualanDetail::with('produk')
            ->where('id_penjualan', $id)
            ->get();
        
        return $detail;
    }

}
