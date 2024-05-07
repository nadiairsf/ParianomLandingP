<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          $this->call(kecamatan::class);
          $this->call(img_LandpageSeeder::class);
          $this->call(LandpageSeeder::class);
          $this->call(user_admin::class);
          
    }
}
