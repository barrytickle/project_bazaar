<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(DegreeTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(BlogTypeTableSeeder::class);
        $this->call(LikeTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(ProjectCommentSeeder::class);
        $this->call(ProjectAuthorizeSeeder::class);
      }
  }
