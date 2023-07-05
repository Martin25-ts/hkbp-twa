<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MsRelationship;
use Hashids\Hashids;

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
             ['relationshipid' => $this->generateRandomId(5), 'relationship' => 'single'],
             ['relationshipid' => $this->generateRandomId(5), 'relationship' => 'married'],
         ];

         foreach ($relationships as $relationshipData) {
             MsRelationship::create($relationshipData);
         }
     }

     /**
      * Generate a random ID with specified length
      *
      * @param int $length
      * @return string
      */
     private function generateRandomId($length)
     {
         $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
         $charactersLength = strlen($characters);
         $randomId = '';

         for ($i = 0; $i < $length; $i++) {
             $randomId .= $characters[rand(0, $charactersLength - 1)];
         }

         return $randomId;
     }

}
