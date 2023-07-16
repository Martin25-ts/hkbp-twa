<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JemaatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jemaat = [
            'jemaatfname' => 'Martin Timoteus',
            'jemaatlname' => 'Siagian',
            'jemaataddress' => 'Twa komp depnaker L21/127',
            'jemaatzone' => 2,
            'genderid' => 'GN001',
            'jemaatPOB' => 'Bekaso',
            'jemaatDOB' => '2003-02-25',
            'jemaatphone' => '082246078543',
            'relationshipid' => 'RS001',
            'statusid' => 'ST001',
            'positionid' => 'PS009',
            'created_at' => Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s')
        ];

        DB::table('jemaats')->insert($jemaat);
    }
}
