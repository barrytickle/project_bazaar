<?php

use Illuminate\Database\Seeder;

class LikeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('likes')->insert([
            ['id' => 1, 'student_id' => 1, 'project_id' => 1]
        ]);
    }
}
