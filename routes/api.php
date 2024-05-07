<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//kecamatan
Route::get('kecamatan','kecamatan@getKecamatan');
//user
Route::post('register','user@register');
Route::post('login','user@login');
Route::post('cekUsername','user@cekUsernameExist');
Route::post('cekEmail','user@cekEmailExist');
Route::post('cekPhone','user@cekPhoneExist');
Route::post('updateProfile','user@updateProfile');
Route::post('getUser','user@getDataUser');
Route::post('getImgUser','user@getImgUser');

//penjual
Route::post('updatePenjual','penjual@updateProfilePenjual');
Route::post('registerPenjual','penjual@register');
Route::post('approve','penjual@approve');
Route::post('disapprove','penjual@disapprove');
Route::post('cekNik','penjual@cekNikExist');
Route::post('getPenjual','penjual@getDataPenjual');
//produk
Route::post('getProduk','produk@getProduk');
Route::post('delete','produk@onDelete');
Route::post('getProdukById','produk@getProdukById');
Route::post('getProdukByPenjual','produk@getProdukByPenjual');
Route::post('inputProduk','produk@inputProduk');
Route::post('updateProduk','produk@updateProduk');
//pesanan
Route::post('getPesananByUser','pesanan@getPesananByUser');
Route::post('getDetailPesananByUser','pesanan@getDetailPesananByUser');
Route::post('getPesananByPenjual','pesanan@getPesananByPenjual');
Route::post('inputPesanan','pesanan@inputPesanan');
Route::post('scan','pesanan@scanPesanan');
Route::post('selesai','pesanan@selesai');
Route::post('cancel','pesanan@canceled');
Route::post('getConfirm','pesanan@getConfirm');
//detail_pesanan
Route::post('getDetail','detail_pesanan@getDetail');

