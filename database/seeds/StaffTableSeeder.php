<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
          ['id' => 1, 'user_id' => 2, 'staff_name' => 'David Walsh']
        ]);
    }
}
