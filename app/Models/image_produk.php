<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image_produk extends Model
{
    use HasFactory;
    protected $table = 'image_produk';
    protected $timestamp = false;
    public function produk(){
        return $this->belongsTo(produk::class);
    }
    
}
