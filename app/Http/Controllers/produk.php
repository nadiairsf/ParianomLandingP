<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class produk extends Controller
{
    public function inputProduk(Request $request)
    {
        $this->validate($request, [
            'id_penjual' => 'required',
            'kategori' => 'required',
            'kategori_sub' => 'required',
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'foto_produk' => 'required|image|mimes:jpeg,png,jpg|max:4096'
        ]);
        $imageName = time() . '.' . $request->foto_produk->extension();

        $request->foto_produk->storeAs('images_produk', $imageName);

        $input = DB::table('produk')->insert([
            'id_penjual' => $request->id_penjual,
            'kategori' => $request->kategori,
            'kategori_sub' => $request->kategori_sub,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'foto_produk' => $imageName
        ]);
        return response()->json($input);
    }
    public function getProduk(Request $request){
        $get = DB::table('produk')
            ->where('kategori',$request->input('kategori'))
            ->where('kategori_sub',$request->input('kategori_sub'))
            ->where('status_deleted','0')
            ->join('penjual','produk.id_penjual','=','penjual.id')
            ->select('produk.*', 'penjual.nama_toko', 'penjual.alamat','penjual.kec')
            ->get();
        if ($get!=null){
            $result['message']='success';
            $result['data']=$get;
        }else{
            $result['message']='fail';
        }
        return response()->json($result);
    }
    public function onDelete(Request $request){
        $update = DB::table('produk')
            ->where('id',$request->input('id_produk'))
            ->update([
               'status_deleted'=>true 
            ]);
        return response()->json($update);
    }
    public function getProdukById(Request $request){
        $get = DB::table('produk')
            ->where('id',$request->input('id'))
            ->get();
        if ($get!=null){
            $result['message']='success';
            $result['data']=$get[0];
        }else{
            $result['message']='fail';
        }
        return response()->json($result);
    }
    public function getProdukByPenjual(Request $request){
        $get = DB::table('produk')
            ->join('penjual','produk.id_penjual','=','penjual.id')
            ->where('id_penjual',$request->input('id_penjual'))
            ->where('kategori',$request->input('kategori'))
            ->where('status_deleted','0')
            ->select('produk.*', 'penjual.nama_toko', 'penjual.alamat','penjual.kec')
            ->get();
        if ($get!=null){
            $result['message']='success';
            $result['data']=$get;
        }else{
            $result['message']='fail';
        }
        return response()->json($result);
    }
    public function updateProduk(Request $request){
        $this->validate($request, [
            'kategori' => 'required',
            'kategori_sub' => 'required',
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'foto_produk' => 'image|mimes:jpeg,png,jpg|max:4096'
        ]);

        if ($request->foto_produk != null){
            $img = DB::table('produk')->where('id',$request->input('id'))->first();
            $file_path = storage_path().'/app/images_produk/'.$img->foto_produk;
            if (is_null($img->foto_produk)){
                 $imageName = time() . '.' . $request->foto_produk->extension();
                 $request->foto_produk->storeAs('images_produk', $imageName);
                 DB::table('produk')
                    ->where('id',$request->input('id'))
                    ->update([
                        'kategori' => $request->kategori,
                        'kategori_sub' => $request->kategori_sub,
                        'nama' => $request->nama,
                        'harga' => $request->harga,
                        'stok' => $request->stok,
                        'foto_produk' => $imageName
                    ]);
                $result['message']='success';
            }else{
                unlink($file_path);
                $imageName = time() . '.' . $request->foto_produk->extension();
                $request->foto_produk->storeAs('images_produk', $imageName);
                DB::table('produk')
                    ->where('id',$request->input('id'))
                    ->update([
                        'kategori' => $request->kategori,
                        'kategori_sub' => $request->kategori_sub,
                        'nama' => $request->nama,
                        'harga' => $request->harga,
                        'stok' => $request->stok,
                        'foto_produk' => $imageName
                    ]);
                $result['message']='success';
            }
        }else {
            DB::table('produk')
                ->where('id',$request->input('id'))
                ->update([
                    'kategori' => $request->kategori,
                    'kategori_sub' => $request->kategori_sub,
                    'nama' => $request->nama,
                    'harga' => $request->harga,
                    'stok' => $request->stok,
                ]);
            $result['message']='success';
        }
        return response()->json($result);
    }
}
