<?php

use Illuminate\Database\Seeder;

class StaffDegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('staffdegrees')->insert([
        ['id' => 1, 'staff_id' => 1, 'degree_id' => 1],
        ['id' => 2, 'staff_id' => 1, 'degree_id' => 2],
      ]);
    }
}
