<?php

namespace App\Exports;

use App\Models\PesananModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use DB;
use Excel;

class RekapExport implements FromView {
  
   
    /**
    * @return \Illuminate\Support\Collection 
    */

    // public function collection()
    // {
    //     $pesanan = PesananModel::with('user')->first();
    //     dd($pesanan);
    //     return PesananModel::all();
    // }

    // public function collection()
    // {   
    //     $data=DB::table('pesanan')
    //     ->join('penjual','pesanan.id_penjual','=','penjual.id')
    //     ->join('user','penjual.id_user', '=', 'user.id')
    //     ->select('penjual.*','pesanan.*','user.*')
    //     ->where('status',1)
    //     ->get();
    //     // dd($data);
    //     return $data;
    // }

     public function view(): View
    {   
        $data=DB::table('pesanan')
        ->join('penjual','pesanan.id_penjual','=','penjual.id')
        ->join('user','penjual.id_user', '=', 'user.id')
        ->select('penjual.*','pesanan.*','user.*')
        ->where('status',1)
        ->get();
        // dd($data);
        return view('Admin.e-rekapseluruh', compact('data'));
    }
}
