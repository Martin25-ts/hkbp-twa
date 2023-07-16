<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pos = [
            [
                'positionid' => 'PS001',
                'position' =>  'Pendeta',
            ],
            [
                'positionid' => 'PS002',
                'position' =>  'Ketua Koinonia',
            ],
            [
                'positionid' => 'PS003',
                'position' =>  'Koinonia',
            ],
            [
                'positionid' => 'PS004',
                'position' =>  'Ketua Marturia',
            ],
            [
                'positionid' => 'PS006',
                'position' =>  'Marturia',
            ],
            [
                'positionid' => 'PS007',
                'position' =>  'Ketua Diakonia',
            ],
            [
                'positionid' => 'PS008',
                'position' =>  'Diakonia',
            ],
            [
                'positionid' => 'PS009',
                'position' =>  'Ruas',
            ],

        ];
        DB::table('ms_positions')->insert($pos);
    }
}
