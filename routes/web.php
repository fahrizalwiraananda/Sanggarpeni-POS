<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Penjualan;
use App\Http\Controllers\PosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
  return view('auth.login');
});

//Menampilkan Halaman Auth
//Route::get('login', [LoginController::class,'index'])->name('login');

Route::controller(Auth\LoginController::class)->group(function(){
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout');
});

Route::controller(Auth\RegisterController::class)->group(function(){
    route::get('register', 'index')->name('register');
    route::post('register-request', 'create');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['CekUserLogin:1']], function () {
        Route::resource('dashboard', DashboardController::class);
        
        //Kategori Controller
        Route::resource('kategori', Admin\KategoriController::class);
        Route::post('insert-category',[Admin\KategoriController::class,'store']);

        Route::get('hapus-kategori/{id}',[Admin\KategoriController::class,'destroy']);

        route::get('edit-kategori/{id}',[Admin\KategoriController::class,'edit']);
        route::put('update-category/{id}',[Admin\KategoriController::class,'update']);
        //Route::get('/kategori/data', [Kategori\KategoriController::class, 'data'])->name('kategori.data');

        //Produk Controller
        Route::resource('produk', Admin\ProdukController::class);
        route::get('tambah-produk',[Admin\ProdukController::class,'add']);
        route::post('insert-produk',[Admin\ProdukController::class,'insert']);

        route::get('edit-product/{id_produk}',[Admin\ProdukController::class,'edit']);
        route::put('update-product/{id}',[Admin\ProdukController::class,'update']);

        route::get('delete-product/{id}',[Admin\ProdukController::class,'delete']);
        route::get('export-produk',[Admin\ProdukController::class,'ekspor']);
        
        route::get('print-barcode/{id}',[Admin\ProdukController::class,'barcodeGenerate']);
        route::get('preview-print/{id}',[Admin\ProdukController::class,'print']);

        //User Controller
        Route::resource('user', Admin\UserController::class);

        route::get('profil',[Admin\UserController::class,'show']);

        route::get('tambah-user',[Admin\UserController::class,'add']);
        route::post('insert-user',[Admin\UserController::class,'store']);

        route::get('edit-user/{id}',[Admin\UserController::class,'edit']);
        route::put('update-user/{id}',[Admin\UserController::class,'update']);

        Route::get('delete-user/{id}',[Admin\UserController::class,'destroy']);

        //Member Controller
        Route::resource('member', Admin\MemberController::class);

        route::get('tambah-member',[Admin\MemberController::class,'add']);
        Route::post('insert-member',[Admin\MemberController::class,'store']);
        
        Route::get('hapus-member/{id}',[Admin\MemberController::class,'destroy']);
        
        route::get('edit-member/{id}',[Admin\MemberController::class,'edit']);
        route::put('update-member/{id}',[Admin\MemberController::class,'update']);
        

         //Setting Controller
         Route::resource('setting', Admin\SettingController::class);
         Route::post('insert-setting',[Admin\SettingController::class,'store']);
         
         Route::get('hapus-setting/{id}',[Admin\SettingController::class,'destroy']);
         
         route::get('edit-setting/{id}',[Admin\SettingController::class,'edit']);
         route::put('update-setting/{id}',[Admin\SettingController::class,'update']);
        //Transaksi Controller
        //1. Penjualan Controller
        Route::get('transaksi-baru', [Penjualan\PenjualanController::class, 'create']);

        //2. Penjualan Detail Controller
        Route::resource('transaksi', Penjualan\PenjualanDetailController::class);
        
        Route::get('transaksi/{id}/data', [Penjualan\PenjualanDetailController::class, 'data'])->name('transaksi.data');





    });

    Route::group(['middleware' => ['CekUserLogin:2']], function () {
        Route::resource('pos', PosController::class);
    });
});


//Masuk Role 1Route::get('/dashboard', [DashboardController::class, 'index']);
//Masuk Role 2Route::get('/kasir', [PosController::class, 'index']);