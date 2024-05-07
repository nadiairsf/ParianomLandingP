<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';

    public function user(){
        return $this->belongsTo(user::class);
    }
    public function penjual(){
        return $this->belongsTo(penjual::class);
    }
    public function detail_pesanan(){
        return $this->hasOne(detail_pesanan::class);
    }
}
