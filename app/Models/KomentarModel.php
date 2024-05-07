<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class KomentarModel extends Model
{
    use HasFactory;
    public function komen()
    {
        return DB::table('komentar');
    }
}
