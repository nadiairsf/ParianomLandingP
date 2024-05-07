<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PenjualModel;
use App\Exports\RekapExport;
use Maatwebsite\Excel\Facades\Excel;
use DB;

 


class DaftarPenjualController extends Controller
{
    public function __construct(){
        $this->Penjual = new PenjualModel();
    }
    
    public function index(){
        $penjual = $this->Penjual->penjual()
        ->join('user','user.id','=','penjual.id_user')
        ->select(['penjual.*',
                'user.*',
                'user.id AS user_id',
                'penjual.id AS penjual_id'])
        ->where('status_toko','>',0)
        ->paginate(10);
        return view('Admin.daftar-penjual', ['penjual' => $penjual]);
    }

    public function detail($id){
        $penjual = $this->Penjual->penjual()
        ->join('user','penjual.id_user','=','user.id')
        ->select(['penjual.*',
                'user.*',
                'user.id AS user_id',
                'penjual.id AS penjual_id'])
        ->where('penjual.id',  $id)
        ->get();
        return view('Admin.detail-penjual', ['penjual' => $penjual]);

        
    }
    
    public function up_aktif(Request $request){
        DB::table('penjual')->where('id', $request->id)->update([
            'status_toko' => "2"
        ]);

        return redirect('admin/daftar-penjual');

    }

    public function up_tutup(Request $request){
        DB::table('penjual')->where('id', $request->id)->update([
            'status_toko' => "4"
        ]);

        return redirect('admin/daftar-penjual');
    }

    public function pending($id){
        $penjual = $this->Penjual->penjual()
        ->join('user','penjual.id_user','=','user.id')
        ->select(['penjual.*',
                'user.*',
                'user.id AS user_id',
                'penjual.id AS penjual_id'])
        ->where('penjual.id',  $id)
        ->get();
        return view('Admin.detail-penjual', ['penjual' => $penjual]);

        
    }

    public function export(){
        
       return Excel::download(new RekapExport,'rekap.xlsx');

        
    }
    

    
}
