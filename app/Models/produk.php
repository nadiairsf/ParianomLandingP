<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $timestamp = false;
    public function penjual(){
        return $this->belongsTo(penjual::class);
    }
    

}
