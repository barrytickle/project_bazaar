<?php

use Illuminate\Database\Seeder;

class ProjectCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authorize_comments')->insert([
          ['id' => 1, 'project_id' => 2, 'user_id' => 2, 'project_comment' => 'This project needs more context, too little information. See me for more details.']
        ]);
    }
}
