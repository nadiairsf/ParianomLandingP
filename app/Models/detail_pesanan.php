<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pesanan extends Model
{
    use HasFactory;
    protected $table = 'detail_pesanan';
    protected $timestamp = false;

    public function user(){
        return $this->belongsTo(user::class);
    }
    public function penjual(){
        return $this->belongsTo(penjual::class);
    }
    public function pesanan(){
        return $this->belongsTo(pesanan::class);
    }
}
