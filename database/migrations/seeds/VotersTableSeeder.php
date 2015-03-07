<?php

use Illuminate\Database\Seeder;

class VotersTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('voters')->delete();

        $voters = array(
            ['id' => 1, 'name' => 'Fahad',  'candidates_id' => 1, 'cast' => false,  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'sajid',  'candidates_id' => 1, 'cast' => false,  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Tumpa', 'candidates_id' => 1, 'cast' => false,  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Baby',  'candidates_id' => 1, 'cast' => true,  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Arif',  'candidates_id' => 1, 'cast' => true,  'created_at' => new DateTime, 'updated_at' => new DateTime],

        );

        //// Uncomment the below to run the seeder
        DB::table('voters')->insert($voters);
    }

}