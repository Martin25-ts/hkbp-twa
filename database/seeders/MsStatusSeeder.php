<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MsStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [

            ['statusid' => 'ST001' , 'status' => 'Active'],
            ['statusid' => 'ST002' , 'status' => 'Rpp'],
            ['statusid' => 'ST003' , 'status' => 'Suspended'],
            ['statusid' => 'ST004' , 'status' => 'banned'],
        ];

        DB::table('ms_statuses')->insert($status);
    }
}
