<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class detail_pesanan extends Controller
{
    public function getDetail(Request $request){
        $get = DB::table('detail_pesanan')
            ->join('user','detail_pesanan.id_user','=','user.id')
            ->join('produk','detail_pesanan.id_produk','=','produk.id')
            ->join('pesanan','detail_pesanan.id_pesanan','=','pesanan.id')
            ->join('penjual','detail_pesanan.id_penjual','=','penjual.id')
            ->where('detail_pesanan.id_user',$request->input('id_user'))
            ->get();
        return response()->json($get);
    }
}
