<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class user extends Controller
{
    public function register(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'nama_lengkap'=>'required',
            'email'=>'required',
            'no_hp'=>'required',
            'alamat'=>'required',
            'kata_sandi'=>'required',
        ]);
        $input = DB::table('user')->insert([
            'username'=>$request->username,
            'nama_lengkap'=>$request->nama_lengkap,
            'email'=>$request->email,
            'no_hp'=>$request->no_hp,
            'alamat'=>$request->alamat,
            'kata_sandi'=>sha1($request->input('kata_sandi'))
        ]);
        if ($input){
            $result['message']='success';
            $result['data']=$input;
        }else{
            $result['message']='fail';
        }
        return response()->json($result);
    }
    public function login(Request $request){
       $cekLogin = DB::table('user')
           ->where('username',$request->input('username'))
           ->where('kata_sandi',sha1($request->input('kata_sandi')))
           ->get();
       if (count($cekLogin)>0){
           foreach ($cekLogin as $item) {
               $result['message']='success';
               $result['id_user']=$item->id;
               $result['nama_lengkap']=$item->nama_lengkap;
               $result['email']=$item->email;
               $result['foto_profil']=$item->foto_profil;
           }
       }else{
           $result['message']='fail';
       }
       return response()->json($result);
    }
    public function updateProfile(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'nama_lengkap' => 'required',
            'email' => 'required',
            'no_hp'=>'required',
            'alamat'=>'required',
            'foto_profil' => 'image|mimes:jpeg,png,jpg|max:4096'
        ]);

        if ($request->foto_profil != null){
            $img = DB::table('user')->where('id',$request->input('id'))->first();
            $file_path = storage_path().'/app/images_profil/'.$img->foto_profil;
            if (is_null($img->foto_profil)){
                $imageName = time() . '.' . $request->foto_profil->extension();
                $request->foto_profil->storeAs('images_profil', $imageName);
                DB::table('user')
                    ->where('id',$request->input('id'))
                    ->update([
                    'username'=>$request->username,
                    'nama_lengkap'=>$request->nama_lengkap,
                    'email'=>$request->email,
                    'no_hp'=>$request->no_hp,
                    'alamat'=>$request->alamat,
                    'foto_profil'=>$imageName
                ]);
            }else{
                unlink($file_path);
                $imageName = time() . '.' . $request->foto_profil->extension();
                $request->foto_profil->storeAs('images_profil', $imageName);
                DB::table('user')
                    ->where('id',$request->input('id'))
                    ->update([
                    'username'=>$request->username,
                    'nama_lengkap'=>$request->nama_lengkap,
                    'email'=>$request->email,
                    'no_hp'=>$request->no_hp,
                    'alamat'=>$request->alamat,
                    'foto_profil'=>$imageName
                ]);
            }
            
            $result['message']='success';
        }else {
            DB::table('user')
                ->where('id',$request->input('id'))
                ->update([
                'username'=>$request->username,
                'nama_lengkap'=>$request->nama_lengkap,
                'email'=>$request->email,
                'no_hp'=>$request->no_hp,
                'alamat'=>$request->alamat
            ]);
            $result['message']='success';
        }
        return response()->json($result);
    }
    public function cekUsernameExist(Request $request){
        $cek = \App\Models\user::all()
            ->where('username',$request->input('username'));
            if  (count($cek)>0){
                $result['message']='exist';
            }else{
                $result['message']='available';
            }
        return response()->json($result);
    }
    public function cekEmailExist(Request $request){
        $cek = \App\Models\user::all()
            ->where('email',$request->input('email'))
        ;
        if  (count($cek)>0){
            $result['message']='exist';
        }else{
            $result['message']='available';
        }
        return response()->json($result);
    }
    public function cekPhoneExist(Request $request){
        $cek = \App\Models\user::all()
            ->where('no_hp',$request->input('no_hp'))
        ;
        if  (count($cek)>0){
            $result['message']='exist';
        }else{
            $result['message']='available';
        }
        return response()->json($result);
    }
    public function getDataUser(Request $request){
            $cek = DB::table('user')->where('id',$request->input('id'))->get();
        if  ($cek!=null){
            $result['message']='success';
            $result['data']=$cek[0];
        }else{
            $result['message']='fail';
        }
        return response()->json($result);
    }
    public function getImgUser(Request $request){
        $cek = \App\Models\user::all()
            ->where('id',$request->input('id'))
            ->pluck('foto_profil')
        ;
        if ($cek!=null){
            $result['message']='success';
            $result['foto_profil']=implode($cek->toArray());

        }else{
            $result['message']='fail';
        }
        return response()->json($result);
    }
}
