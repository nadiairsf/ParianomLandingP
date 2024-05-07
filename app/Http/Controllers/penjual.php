<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class penjual extends Controller
{
    public function register(Request $request){
        $this->validate($request,[
            'id_user'=>'required',
            'nama_toko'=>'required',
            'nik'=>'required',
            'alamat'=>'required',
            'kec'=>'required',
            'foto_ktp'=>'required|image|mimes:jpeg,png,jpg|max:5120',
        ]);
        $imageName = time() . '.' . $request->foto_ktp->extension();
        $request->foto_ktp->storeAs('images_ktp', $imageName);
        $input = DB::table('penjual')->insert([
            'id_user'=>$request->id_user,
            'nama_toko'=>$request->nama_toko,
            'nik'=>$request->nik,
            'alamat'=>$request->alamat,
            'kec'=>$request->kec,
            'foto_ktp'=>$imageName,

        ]);
        return response()->json($input);
    }
    public function cekNikExist(Request $request){
        $cek = \App\Models\penjual::all()
            ->where('nik',$request->input('nik'))
        ;
        if  (count($cek)>0){
            $result['message']='exist';
        }else{
            $result['message']='available';
        }
        return response()->json($result);
    }
    public function approve(Request $request){
        $approval = DB::table('penjual')
            ->where('id_user',$request->input('id_user'))
            ->update([
            'status_toko'=>true
        ]);
        return response()->json($approval);
    }
    public function disapprove(Request $request){
        $approval = DB::table('penjual')
            ->where('id_user',$request->input('id_user'))
            ->update([
                'status_toko'=>false
            ]);
        return response()->json($approval);
    }
    public function getDataPenjual(Request $request){
        $cek = DB::table('penjual')
            ->where('id_user',$request->input('id_user'))
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
    public function updateProfilePenjual(Request $request){
       $this->validate($request, [
            'nama_toko' => 'required',
            'kec' => 'required',
            'alamat'=>'required',
            'foto_toko' => 'image|mimes:jpeg,png,jpg|max:4096'
        ]);

        if ($request->foto_toko != null){
            $img = DB::table('penjual')->where('id_user',$request->input('id_user'))->first();
            $file_path = storage_path().'/app/images_toko/'.$img->foto_toko;
            if (is_null($img->foto_toko)){
                $imageName = time() . '.' . $request->foto_toko->extension();
                $request->foto_toko->storeAs('images_toko', $imageName);
                DB::table('penjual')
                    ->where('id_user',$request->input('id_user'))
                    ->update([
                    'nama_toko'=>$request->nama_toko,
                    'kec'=>$request->kec,
                    'alamat'=>$request->alamat,
                    'foto_toko'=>$imageName
                ]);
            }else{
                unlink($file_path);
                $imageName = time() . '.' . $request->foto_toko->extension();
                $request->foto_toko->storeAs('images_toko', $imageName);
                DB::table('penjual')
                    ->where('id_user',$request->input('id_user'))
                    ->update([
                    'nama_toko'=>$request->nama_toko,
                    'kec'=>$request->kec,
                    'alamat'=>$request->alamat,
                    'foto_toko'=>$imageName
                ]);
            }
            
            $result['message']='success';
        }else {
            DB::table('penjual')
                ->where('id_user',$request->input('id_user'))
                ->update([
                'nama_toko'=>$request->nama_toko,
                    'kec'=>$request->kec,
                    'alamat'=>$request->alamat,
            ]);
            $result['message']='success';
        }
        return response()->json($result);
    }
}
