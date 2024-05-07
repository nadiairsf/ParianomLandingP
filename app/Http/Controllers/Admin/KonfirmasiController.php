<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PenjualModel;
use Illuminate\Support\Facades\DB;

class KonfirmasiController extends Controller
{
    public function __construct(){
        $this->Penjual = new PenjualModel();
    }
    public function index(){
        $penjual = $this->Penjual->penjual()->whereNull('status_toko')->get();


        return view('Admin.verifikasi', ['penjual' => $penjual]);
    }

    public function arsip(){
        $penjual = $this->Penjual->penjual()->where('status_toko','0')->get();


        return view('Admin.arsip-penjual', ['penjual' => $penjual]);
    }

    public function detail($id){
        $penjual = $this->Penjual->penjual()->where('id',  $id)->get();


        return view('Admin.detail-verif', ['penjual' => $penjual]);
    }

    public function approve(Request $request){
        DB::table('penjual')->where('id', $request->id)->update([
            'status_toko' => "1"
        ]);

        return redirect('admin/daftar-penjual');

    }

    public function approve_active(Request $request){
        DB::table('penjual')->where('id', $request->id)->update([
            'status_toko' => "2"
        ]);

        return redirect('admin/daftar-penjual');

    }

    public function nonapprove(Request $request){
        DB::table('penjual')->where('id', $request->id)->update([
            'status_toko' => "0"
        ]);

        return redirect('admin/verifikasi-penjual');
    }

    public function aktif(Request $request){
        DB::table('penjual')->where('id', $request->id)->update([
            'status_toko' => null
        ]);

        return redirect('admin/verifikasi-penjual');
    }
}
