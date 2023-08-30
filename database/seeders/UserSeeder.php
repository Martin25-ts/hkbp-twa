<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'jemaatid' => '2',
            'useremail' => 'nina.admin@hkbp.twa',
            'password' => bcrypt('Wismaasri127'),
            'roleid' => 'RL004',
            'remember_token' => 'NULL',
            'created_at' => Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s'),
        ];

        DB::table('users')->insert($user);
    }
}
