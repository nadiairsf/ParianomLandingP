<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    use HasFactory;
    protected $table = 'pengaduan';
    protected $timestamp = false;
    public function user(){
        return $this->belongsTo(user::class);
    }
    public function penjual(){
        return $this->belongsTo(penjual::class);
    }
}
