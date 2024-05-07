<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjual extends Model
{
    use HasFactory;
    protected $table = 'penjual';
    protected $timestamp = false;
    public function user(){
        return $this->belongsTo(user::class);
    }
    public function produk(){
        return $this->hasMany(produk::class);
    }
    public function pesanan(){
        return $this->hasMany(pesanan::class);
    }
    public function detail_pesanan(){
        return $this->hasOne(detail_pesanan::class);
    }
    public function room(){
        return $this->hasMany(room::class);
    }
    public function kecamatan(){
        return $this->belongsTo(kecamatan::class,'id_kec');
    }
}
