<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pesanan extends Controller
{
    public function inputPesanan(Request $request){
        $this->validate($request,[
            'id_produk'=>'required',
            'id_user'=>'required',
            'id_penjual'=>'required',
            'jumlah'=>'required',
            'kode_pesanan'=>'required',
            'total'=>'required'
        ]);
        $input = DB::table('pesanan')->insert([
            'id_produk'=>$request->id_produk,
            'id_user'=>$request->id_user,
            'id_penjual'=>$request->id_penjual,
            'kode_pesanan'=>$request->kode_pesanan,
            'jumlah'=>$request->jumlah,
            'total'=>$request->total
        ]);
        return response()->json($input);
    }
    public function getPesananByUser(Request $request){
        $get = DB::table('pesanan')
            ->join('produk','pesanan.id_produk','=','produk.id')
            ->join('penjual','pesanan.id_penjual','=','penjual.id')
            ->where('pesanan.id_user',$request->input('id_user'))
            ->select('pesanan.*', 'produk.nama', 'produk.foto_produk','penjual.alamat','penjual.nama_toko')
            ->orderByDESC('timestamp')
            ->get();
        if  ($get!=null){
            $result['message']='success';
            $result['data']=$get;
        }else{
            $result['message']="no data";
        }
        return response()->json($result);
    }
    public function getDetailPesananByUser(Request $request){
        $get = DB::table('pesanan')
            ->join('produk','pesanan.id_produk','=','produk.id')
            ->join('penjual','pesanan.id_penjual','=','penjual.id')
            ->where('pesanan.id_user',$request->input('id_user'))
            ->where('pesanan.kode_pesanan',$request->input('kode_pesanan'))
            ->select('pesanan.*', 'produk.nama', 'produk.foto_produk','produk.kategori_sub','penjual.alamat','penjual.nama_toko','penjual.kec')
            ->get();
        if  ($get!=null){
            $result['message']='success';
            $result['data']=$get[0];
        }else{
            $result['message']="no data";
        }
        return response()->json($result);
    }
    public function getPesananByPenjual(Request $request){
        $get = DB::table('pesanan')
            ->join('produk','pesanan.id_produk','=','produk.id')
            ->join('user','pesanan.id_user','=','user.id')
            ->where('pesanan.id_penjual',$request->input('id_penjual'))
            ->select('pesanan.*', 'produk.nama', 'produk.foto_produk','user.nama_lengkap')
            ->orderByDESC('timestamp')
            ->get();
        if  ($get!=null){
            $result['message']='success';
            $result['data']=$get;
        }else{
            $result['message']="no data";
        }  
        return response()->json($result);
    }
    public function scanPesanan(Request $request){
        $scan = DB::table('pesanan')
            ->where('kode_pesanan',$request->input('kode_pesanan'))
            ->where('id_penjual',$request->input('id_penjual'))
            ->get();
        if (count($scan)>0){
            foreach ($scan as $item) {
                $result['message']='success';
                DB::table('pesanan')
                    ->where('id',$item->id)
                    ->update([
                        'status'=>true
                    ]);
            }
        }else{
            $result['message']='fail';
        }
        return response()->json($result);
    }
    public function selesai(Request $request){
        $scan = DB::table('pesanan')
            ->where('id',$request->input('id_pesanan'))
            ->get();
        if (count($scan)>0){
            foreach ($scan as $item) {
                $result['message']='success';
                DB::table('pesanan')
                    ->where('id',$item->id)
                    ->update([
                        'status'=>true
                    ]);
            }
        }else{
            $result['message']='fail';
        }
        return response()->json($result);
    }
    public function canceled(Request $request){
        $scan = DB::table('pesanan')
            ->where('id',$request->input('id_pesanan'))
            ->get();
        if (count($scan)>0){
            foreach ($scan as $item) {
                $result['message']='success';
                DB::table('pesanan')
                    ->where('id',$item->id)
                    ->update([
                        'status'=>false
                    ]);
            }
        }else{
            $result['message']='fail';
        }
        return response()->json($result);
    }
    public function getConfirm(Request $request){
        $cek = DB::table('pesanan')
            ->where('kode_pesanan',$request->input('kode_pesanan'))
            ->get()
            ;
        if  (count($cek)>0){
            $result['message']='exist';
            $result['data']=$cek[0];
        }else{
            $result['message']="doesn't exist";
        }
        return response()->json($result);
    }
}
