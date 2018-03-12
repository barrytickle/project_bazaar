<?php

use Illuminate\Database\Seeder;

class BlogTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogtypes')->insert([
          ['id' => 1, 'name' => 'Blog'],
          ['id' => 2, 'name' => 'Sample']
        ]);
    }
}
