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
          ['id' => 1, 'student_id' => 22678832],
          ['id' => 2, 'student_id' => 22678834]
        ]);
    }
}
