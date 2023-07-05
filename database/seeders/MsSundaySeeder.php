<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MsSundaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sunday = [
            'accountid' => '1',
            'sundaydate' => '2023-07-02',
            'sundaythumbnail' => 'thumbnail.png',
            'sundayagenda' => 'acara.pdf',
            'sundaywarta' => 'warta.pdf',
            'sundaylive' => 'https://www.youtube.com/live/afEb_wkBDRY?feature=share',
            'sundaydescription' => 'Live Streaming akan di adakan setiap hari minggu pada ibadah pukul 11.15',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];

        DB::table('ms_sundays')->insert($sunday);
    }
}
