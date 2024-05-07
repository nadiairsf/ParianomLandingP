<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    use HasFactory;
    protected $table = 'kecamatan';

    public function penjual(){
        return $this->hasOne(penjual::class);
    }
}
