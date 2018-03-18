<?php

use Illuminate\Database\Seeder;

class ProjectAuthorizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_authorizes')->insert([
          ['id' => 1, 'project_id' => 1, 'staff_id' => 1]
        ]);
    }
}
