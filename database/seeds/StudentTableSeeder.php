<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
          ['id' => 1, 'user_id' => 1, 'student_id' => 22678832, 'degree_id' => 1],
        ]);
    }
}
