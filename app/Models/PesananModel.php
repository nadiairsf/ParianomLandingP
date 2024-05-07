<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PesananModel extends Model
{
    use HasFactory;
    
    public function user(){
        return $this->belongsTo(user::class);
    }

    protected $table = "pesanan";

    protected $fillable=[
        'id',
        'id_produk',
        'id_user',
        'id_penjual',
        'jumlah',
        'total',
        'status',
        'timestamp'
    ];

    

    public function pesanan()
    {
        return DB::table('pesanan');
    }

    public static function hitung(String $id_penjual)
    {
        return Pesanan::where('id_penjual',$id_penjual)
        ->selectRaw('SUM(total) as totalHarga')
        ->selectRaw('total')
        ->groupBy('id_penjual');
    }
    public function join()
    {
        return  DB::table('pesanan')
            ->join('penjual','penjual.id','=','pesanan.id_penjual')
            ->join('user','user.id','=','penjual.id_user')
            ->select('penjual,*',
                     'pesanan,*',
                     'user,*'
            );
    }
}
