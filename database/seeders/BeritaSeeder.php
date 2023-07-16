<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $berita = [

                'userid' => '1',
                'beritaimage' => 'Welcome.png',
                'beritatitle' => 'Welcome To Hkbp Twa',
                'beritadeskripsi' => 'Selamat datang di website baru hkbp taman wisam asri website ini akan menjadi website utama untuk mennunjang segala kebutuhan jemaat',
                'created_at' => Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s'),
                'beritatime' => '2023-07-16'

        ];

        DB::table('beritas')->insert($berita);
    }
}
