<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MsGenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = [
            ['genderid' => 'GN001', 'gender' => 'Pria'],
            ['genderid' => 'GN002', 'gender' => 'Wanita']
        ];


        DB::table('ms_genders')->insert($genders);
    }
}
