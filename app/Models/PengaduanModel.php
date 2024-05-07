<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class PengaduanModel extends Model
{
    use HasFactory;

    public function Pengaduan()
    {
        return DB::table('pengaduan');
    }
}
