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

            [
                'userid' => '1',
                'sundaydate' => '2023-06-25',
                'sundaythumbnail' => 'thumbnail.png',
                'sundayagenda' => 'acara.pdf',
                'sundaywarta' => 'warta.pdf',
                'sundaylive' => 'https://www.youtube.com/live/2TtGvKbwQgk?feature=share',
                'sundaydescription' => '',
                'created_at' => Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s')

            ],
            [
                'userid' => '1',
                'sundaydate' => '2023-07-02',
                'sundaythumbnail' => 'thumbnail.png',
                'sundayagenda' => 'acara.pdf',
                'sundaywarta' => 'warta.pdf',
                'sundaylive' => 'https://www.youtube.com/live/afEb_wkBDRY?feature=share',
                'sundaydescription' => '',
                'created_at' => Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s')

            ],
            [
                'userid' => '1',
                'sundaydate' => '2023-07-09',
                'sundaythumbnail' => 'thumbnail.png',
                'sundayagenda' => 'acara.pdf',
                'sundaywarta' => 'warta.pdf',
                'sundaylive' => 'https://www.youtube.com/live/Wf2VOS_uNfg?feature=share',
                'sundaydescription' => '',
                'created_at' => Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s')

            ]
        ];

        DB::table('sundays')->insert($sunday);
    }
}
