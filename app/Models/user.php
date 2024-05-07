<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $timestamp = false;
    public function pesanan(){
        return $this->hasOne(pesanan::class);
    }
    public function penjual(){
        return $this->hasOne(penjual::class);
    }
    public function detail_pesanan(){
        return $this->hasOne(detail_pesanan::class);
    }
    public function room(){
        return $this->hasMany(room::class);
    }
    public function pengaduan(){
        return $this->hasMany(pengaduan::class);
    }
}
