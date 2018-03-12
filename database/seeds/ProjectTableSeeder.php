<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
          ['id' => 1, 'project_name' => 'Project Bazaar', 'project_author' => 1, 'project_authorize' => 1],
          ['id' => 2, 'project_name' => 'Liverpool Museum Game', 'project_author' => 1, 'project_authorize' => NULL]
        ]);
    }
}
