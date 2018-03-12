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
          ['id' => 1, 'staff_name' => 'David Walsh', 'staff_email' => 'David.Walsh@edgehill.ac.uk', 'password' => md5('webdev')]
        ]);
    }
}
