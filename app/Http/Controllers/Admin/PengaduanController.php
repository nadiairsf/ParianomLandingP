<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PengaduanModel;
use Illuminate\Support\Facades\DB;

class PengaduanController extends Controller
{
    //
    public function __construct(){
        $this->Pengaduan = new PengaduanModel();
    }


    public function index(){
        $pengaduan = $this->Pengaduan->pengaduan()
            ->select('penjual.nama_toko AS nama_penjual','user.nama_lengkap AS nama_user','pengaduan.*'
            ,DB::raw('id_penjual, count(pengaduan.id) as total'))
            ->join('penjual','penjual.id','=','pengaduan.id_penjual')
            ->join('user','user.id','=','pengaduan.id_user')
            ->groupBy("pengaduan.id_penjual")   
            ->get();

        $count = $this->Pengaduan->pengaduan()
        ->select(DB::raw('id_penjual, count(id) as total'))
        ->groupby('id_penjual')
        ->get();
        // $count = DB::table('pengaduan')->selectRaw('*, count(*)')->groupBy('id');

        // $count = DB::table('pengaduan')->where('id_penjual')->count();
        $count = $this->Pengaduan->pengaduan()
            ->select('id_penjual')
            ->groupBy('id_penjual')
            ->get()->count();

        return view('Admin.pengaduan', ['pengaduan' => $pengaduan, 'count' => $count]);
    }

    public function detail_index($id_penjual){
        $pengaduan = $this->Pengaduan->pengaduan()
        ->join('penjual','penjual.id','=','pengaduan.id_penjual')
        ->join('user','user.id','=','pengaduan.id_user')
        ->select('penjual.nama_toko AS nama_penjual','user.nama_lengkap AS nama_user','pengaduan.*')
        ->where('pengaduan.id_penjual',  $id_penjual)
        ->get();

        return view ('Admin.detail-pengaduan',['pengaduan' => $pengaduan]);
    }
}
