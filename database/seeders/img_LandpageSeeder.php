<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class img_LandpageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('img_landpage')->insert([
            'gbr1'    => 'logo-white.png',
            'gbr2'    => 'slide-bg.png',
            'gbr3'    => 'iphone-slider.png',
            'gbr4'    => 'iphone-slider2.png',
            'gbr5'    => 'iphone-slider3.png',
            'gbr6'    => 'overview-bg.png',
            'gbr7'    => 'iphone.png',
            'gbr8'    => 'video-bg.png',
        ]);
    }
}
