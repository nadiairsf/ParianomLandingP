<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class pengaduan extends Controller
{
    public function insertPengaduan(Request $request){
        $this->validate($request,[
                'id_user'=>'required',
                'id_penjual'=>'required',
                'kategori_pengaduan'=>'required',
                'deskripsi'=>'required'
            ]);
        // $imageName = time() . '.' . $request->bukti_pengaduan->extension();
        // $request->bukti_pengaduan->storeAs('images_pengaduan', $imageName);
        $insert = DB::table('pengaduan')
            ->insert([
            'id_user'=>$request->id_user,
            'id_penjual'=>$request->id_penjual,
            'kategori_pengaduan'=>$request->kategori_pengaduan,
            'deskripsi'=>$request->deskripsi,
            'bukti_pengaduan'=>$request->bukti_pengaduan
        ]);
        if  ($insert){
            $result['message']='success';
        }else{
            $result['message']='fail';
        }
        return response()->json($result);
    }
}
