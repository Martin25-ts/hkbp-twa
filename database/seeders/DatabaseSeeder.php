<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(MsRelationshipSeeder::class);
        $this->call(MsRoleSeeder::class);
        $this->call(MsGenderSeeder::class);
        $this->call(MsStatusSeeder::class);
        $this->call(PositionSeeder::class);


        $this->call(JemaatSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MsSundaySeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
