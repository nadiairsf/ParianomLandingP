<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PesananModel;
use App\Models\PenjualModel;
use Illuminate\Support\Facades\DB;
use Excel;



class RiwayatController extends Controller
{
    public function __construct(){
        $this->Pesanan = new PesananModel();
        $this->Penjual= new PenjualModel();
    }
    
    public function index(){
        $pesanan = $this->Pesanan->pesanan()
        ->join('penjual','pesanan.id_penjual','=','penjual.id')
        ->join('user','penjual.id_user', '=', 'user.id')
        ->select('penjual.*','pesanan.*','user.*')
        ->where('status',1)
        ->paginate(10);
        return view('Admin.rekap-penjualan', ['pesanan' => $pesanan]);
    }


    public function index_toko(){

        $pesanan = DB::table('pesanan')
        ->select("pesanan.id_penjual","pesanan.jumlah","pesanan.total","penjual.*"
        ,DB::raw('SUM(pesanan.total) as total_harga')
        ,DB::raw('SUM(pesanan.jumlah) as total_jumlah'))
        ->join("penjual","penjual.id","=","pesanan.id_penjual")
        ->groupBy("pesanan.id_penjual")
        ->paginate(10);
       
        return view('Admin.rekap-toko', ['pesanan' => $pesanan]);
    }

    
    public function export(){
        
        return Excel::download(new RekapExport,'rekap.xlsx');
 
         
     }

     
     
}
