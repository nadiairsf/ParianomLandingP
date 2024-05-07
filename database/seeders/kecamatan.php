<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kecamatan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $isi=[
          ['nama'=>'Balerejo'],['nama'=>'Dagangan'],['nama'=>'Dolopo'],
          ['nama'=>'Geger'],['nama'=>'Gemarang'],['nama'=>'Jiwan'],
          ['nama'=>'Kare'],['nama'=>'Kebonsari'],['nama'=>'Madiun'],
          ['nama'=>'Mejayan'],['nama'=>'Pilangkenceng'],['nama'=>'Saradan'],
          ['nama'=>'Sawahan'],['nama'=>'Wonoasri'],['nama'=>'Wungu']
        ];
        foreach ($isi as $item) {
            DB::table('kecamatan')->insert([
                'nama'=>$item['nama']
            ]);

        }


    }
}
