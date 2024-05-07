<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandpageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('landpage')->insert([
            'teks1'  => 'Beranda',
            'teks2'  => 'Belanja',
            'teks3'  => 'Download',
            'teks4'  => 'Video',
            'teks5'  => 'Hubungi',
            'teks6'  => 'Parianom mendukung ekonomi masyarakat',
            'teks7'  => 'Parianom merupakan platform jual beli pangan dan kriya berbasis mobile untuk mewujudkan penguatan ekonomi masyarakat dalam mendukung Pembangunan Ekonomi Nasional',
            'teks8'  => 'Pangan',
            'teks9'  => 'Kriya',
            'teks10'  => 'Mengapa Memilih Parianom',
            'teks11'  => 'Cari Produk Pangan dan Kriya Lebih Mudah dengan Parianom',
            'teks12'  => 'Layanan Istimewa',
            'teks13'  => 'Pemesanan Praktis',
            'teks14'  => 'Tawaran Menarik',
            'teks15'  => 'Menghemat Ongkos',
            'teks16'  => 'Banyak Pilihan',
            'teks17'  => 'Buka Toko Tanpa Biaya',
            'teks18'  => 'Mudah digunakan Segala Kalangan',
            'teks19'  => 'Parianom',
            'teks20'  => 'Parianom merupakan platform jual beli pangan dan kriya berbasis mobile untuk mewujudkan penguatan ekonomi masyarakat dalam mendukung PEN',
        ]);
    }
}
