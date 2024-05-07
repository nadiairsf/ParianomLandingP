<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penjual extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penjual')->insert([
            'id_user'=>1,
            'nama_toko'=>'Sugeng Waras',
            'nik'=>'312341241412',
            'alamat'=>'Jl.Siriwangi',
            'kec'=>'wungu',
            'status_toko'=>false
        ]);
    }
}
