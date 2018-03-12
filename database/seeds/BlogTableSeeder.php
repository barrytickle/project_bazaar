<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
          ['id'=> 1, 'blog_title' => 'What is a dissertation project?', 'blog_date' => date("Y-m-d", time())
, 'blog_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et nibh diam. Morbi suscipit nunc tortor. Suspendisse ac tempus risus, sed mattis mauris. Integer nibh lorem, iaculis nec lectus sed, consequat tincidunt quam. Aenean dolor mauris, bibendum ac faucibus eget, mollis in ipsum. ', 'slug' => 'what-is-a-dissertation-project', 'type' => 1]
        ]);
    }
}
