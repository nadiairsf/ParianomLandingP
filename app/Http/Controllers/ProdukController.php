<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProdukModel;
use App\Models\KomentarModel;
use DB;

class ProdukController extends Controller
{
     //
     public function __construct(){
        $this->Produk = new ProdukModel();
        $this->Komentar = new KomentarModel();
    }
    
    public function index_pangan(){
        
       
        
        $produk = $this->Produk->produk()
        ->join('penjual','produk.id_penjual','=','penjual.id')
        ->select('produk.id AS id_produk',DB::raw('produk.*'),'penjual.*')
        ->where('kategori','pangan')
        ->paginate(12);
      
        
        // $img = DB::select('select foto_produk from produk'); 
        // $base64_image = "data:image/jpeg;base64,$img";
        
        return view('shop-pangan', ['produk' => $produk]);
    }

    //Kategori
    public function pangan_makanan(){
        $produk = $this->Produk->produk()
        ->join('penjual','produk.id_penjual','=','penjual.id')
        ->select('produk.id AS id_produk',DB::raw('produk.*'),'penjual.*')
        ->where('kategori_sub','makanan')
        ->paginate(12);
        return view('shop-pangan', ['produk' => $produk]);
    }

    public function pangan_minuman(){
        $produk = $this->Produk->produk()
        ->join('penjual','produk.id_penjual','=','penjual.id')
         ->select('produk.id AS id_produk',DB::raw('produk.*'),'penjual.*')
        ->where('kategori_sub','minuman')
        ->paginate(12);
        return view('shop-pangan', ['produk' => $produk]);
    }

    public function pangan_camilan(){
        $produk = $this->Produk->produk()
        ->join('penjual','produk.id_penjual','=','penjual.id')
         ->select('produk.id AS id_produk',DB::raw('produk.*'),'penjual.*')
        ->where('kategori_sub','camilan')
        ->paginate(12);
        return view('shop-pangan', ['produk' => $produk]);
    }

    public function pangan_bahanBaku(){
        $produk = $this->Produk->produk()
        ->join('penjual','produk.id_penjual','=','penjual.id')
         ->select('produk.id AS id_produk',DB::raw('produk.*'),'penjual.*')
        ->where('kategori_sub','bahan baku')
        ->paginate(12);
        return view('shop-pangan', ['produk' => $produk]);
    }



    public function index_kriya(){
        $produk = $this->Produk->produk()
        ->join('penjual','produk.id_penjual','=','penjual.id')
        ->select('produk.*','penjual.*')
        ->where('kategori','kriya')
        ->paginate(12);
        return view('shop-kriya', ['produk' => $produk]);
    }

    public function kriya_hasilKriya(){
        $produk = $this->Produk->produk()
        ->join('penjual','produk.id_penjual','=','penjual.id')
        ->select('produk.*','penjual.*')
        ->where('kategori_sub','hasil kriya')
        ->paginate(12);
        return view('shop-kriya', ['produk' => $produk]);
    }

    public function kriya_bahanOlahan(){
        $produk = $this->Produk->produk()
        ->join('penjual','produk.id_penjual','=','penjual.id')
        ->select('produk.*','penjual.*')
        ->where('kategori','kriya')
        ->where('kategori_sub','bahan baku')
        ->paginate(12);
        return view('shop-kriya', ['produk' => $produk]);
    }
    
    public function search_pangan(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $produk = $this->Produk->produk()
            ->join('penjual','produk.id_penjual','=','penjual.id')
             ->select('produk.id AS id_produk',DB::raw('produk.*'),'penjual.*')
            ->where('nama', 'LIKE', "%{$search}%")
            ->orWhere('kec', 'LIKE', "%{$search}%")
            ->paginate(12);
    
        // Return the search view with the resluts compacted
        return view('shop-pangan', compact('produk'));
    }
    
     public function search_kriya(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $produk = $this->Produk->produk()
            ->join('penjual','produk.id_penjual','=','penjual.id')
            ->select('produk.*','penjual.*')
            ->where('nama', 'LIKE', "%{$search}%")
            ->orWhere('kec', 'LIKE', "%{$search}%")
            ->paginate(12);
    
        // Return the search view with the resluts compacted
        return view('shop-pangan', compact('produk'));
    }
    
    
    public function detail($id){
        $produk = $this->Produk->produk()
        ->join('penjual','produk.id_penjual','=','penjual.id')
        ->select('produk.*','penjual.*')
        ->where('produk.id',$id)
        ->get();
        
      $komen = $this->Komentar->komen()
        ->get();
        
        // return $produk;
        return view('detail', ['produk' => $produk,'komen'=>$komen]);
    }
    
    public function komentar(Request $request)
    {
        $komen = $this->Komentar->komen()->insert([
			'nama' => $request->nama,
			'email' => $request->email,
			'text' => $request->text

        ]);
    
       return redirect()->back();
    }
    
    

   
}
