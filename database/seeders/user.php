<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'username'=>'deo997',
            'nama_lengkap'=>'Deo Adzar',
            'email'=>'deoadzar89@gmail.com',
            'no_hp'=>'89678663523',
            'alamat'=>'Jl. Taman Asri',
            'kata_sandi'=>sha1('deoadzar89')

        ]);
    }
}
