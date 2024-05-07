<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;
    protected $table = 'room';
    protected $timestamp = false;

    public function penjual(){
        return $this->belongsTo(penjual::class);
    }
    public function user(){
        return $this->belongsTo(user::class);
    }
    public function chat(){
        return $this->hasMany(chat::class);
    }
}
