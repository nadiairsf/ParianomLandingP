<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\KonfirmasiController;
// use App\Http\Controllers\Admin\DaftarPenjualController;
// use App\Http\Controllers\Admin\ProdukController;


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
        return view('index');
    });

// Route::get('/', '\App\Http\Controllers\LandpageController@indexi');
// Route::get('/', '\App\Http\Controllers\LandpageController@indexg');


Route::get('/home', function () {
    return view('home');
});

Route::get('/sign', function () {
    return view('auth.sign-in');
});



Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
    Route::get('/admin/verifikasi-penjual', '\App\Http\Controllers\Admin\KonfirmasiController@index');
    // Route::get('/admin/detail-verif/{id}', 'App\Http\Controllers\Admin\KonfirmasiController@detail');
    Route::get('/admin/detail-verif/{id}',[KonfirmasiController::class, 'detail']);
    
    Route::get('/admin/arsip-penjual',  '\App\Http\Controllers\Admin\KonfirmasiController@arsip');
    Route::get('/approve/{id}', '\App\Http\Controllers\Admin\KonfirmasiController@approve');
    Route::get('/approve/active/{id}', '\App\Http\Controllers\Admin\KonfirmasiController@approve_active');
    Route::get('/nonapprove/{id}', '\App\Http\Controllers\Admin\KonfirmasiController@nonapprove');
    Route::get('/penjual-aktif/{id}', '\App\Http\Controllers\Admin\KonfirmasiController@aktif');

    Route::get('/admin/daftar-penjual', '\App\Http\Controllers\Admin\DaftarPenjualController@index');
    Route::get('/admin/detail-penjual/{id}','\App\Http\Controllers\Admin\DaftarPenjualController@detail');
    Route::get('/upaktif{id}', '\App\Http\Controllers\Admin\DaftarPenjualController@up_aktif');
    Route::get('/uptutup/{id}', '\App\Http\Controllers\Admin\DaftarPenjualController@up_tutup');
    
    Route::get('/export-rekap', '\App\Http\Controllers\Admin\DaftarPenjualController@export');

    // Route::get('/admin/riwayat-transaksi', '\App\Http\Controllers\Admin\RiwayatController@index');
    Route::view('/admin/grafik-penjualan', 'admin.grafik-penjualan');
    Route::get('/admin/rekap-penjualan', '\App\Http\Controllers\Admin\RiwayatController@index');
    Route::get('/admin/rekap-toko', '\App\Http\Controllers\Admin\RiwayatController@index_toko');
    
    
    Route::get('/admin/pengaduan', '\App\Http\Controllers\Admin\PengaduanController@index');
    Route::get('/admin/detail-pengaduan/{id_penjual}', '\App\Http\Controllers\Admin\PengaduanController@detail_index');

});

// Route Landing Page
Route::get('/shop-pangan', '\App\Http\Controllers\ProdukController@index_pangan');
Route::get('/pangan-makanan', '\App\Http\Controllers\ProdukController@pangan_makanan');
Route::get('/pangan-minuman', '\App\Http\Controllers\ProdukController@pangan_minuman');
Route::get('/pangan-camilan', '\App\Http\Controllers\ProdukController@pangan_camilan');
// Route::get('/pangan-makanan', '\App\Http\Controllers\ProdukController@pangan_makanan');
Route::get('/search-pangan', '\App\Http\Controllers\ProdukController@search_pangan')->name('search_pangan');

Route::get('/shop-kriya', '\App\Http\Controllers\ProdukController@index_kriya');
Route::get('/kriya-hasilKriya', '\App\Http\Controllers\ProdukController@kriya_hasilKriya');
Route::get('/kriya-bahanOlahan', '\App\Http\Controllers\ProdukController@kriya_bahanOlahan');
Route::get('/search-kriya', '\App\Http\Controllers\ProdukController@search_kriya')->name('search_kriya');


Route::get('/detail/{id}','\App\Http\Controllers\ProdukController@detail');
Route::post('/komen','\App\Http\Controllers\ProdukController@komentar');

//Route Admin
// Route::view('/admin/index', 'admin.index');

