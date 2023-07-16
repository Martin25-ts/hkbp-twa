<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MsRelationship;
use Hashids\Hashids;
use Illuminate\Support\Facades\DB;

class MsRelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     public function run()
     {
        $relationships = [
            [
                'relationshipid' => 'RS001',
                'relationship' => 'single'
            ],
            [
                'relationshipid' => 'RS002',
                'relationship' => 'married'
            ],
            // [
            //     'relationshipid' => 'RS003',
            //     'relationship' => ''
            // ],
        ];

        DB::table('ms_relationships')->insert($relationships);
     }

     /**
      * Generate a random ID with specified length
      *
      * @param int $length
      * @return string
      */
}
