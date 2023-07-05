<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MsRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['roleid' => 'RL001', 'role' => 'Admin'],
            ['roleid' => 'RL002', 'role' => 'Naposo'],
            ['roleid' => 'RL003', 'role' => 'Parhalado'],
            ['roleid' => 'RL004', 'role' => 'Remaja'],
            ['roleid' => 'RL005', 'role' => 'Ina'],
            ['roleid' => 'RL006', 'role' => 'Ama'],
            ['roleid' => 'RL007', 'role' => 'Gsm'],
        ];

        DB::table('ms_roles')->insert($roles);
    }
}
