<?php

use Illuminate\Database\Seeder;

class DegreeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('degrees')->insert([
          ['id' => 1, 'name' => 'BSc Hons Web Design and Development' ],
          ['id' => 2, 'name' => 'BSc Hons Networking' ],
          ['id' => 3, 'name' => 'BSc Hons Games programming and Development' ],
          ['id' => 4, 'name' => 'BSc Hons General Computing' ],
          ['id' => 5, 'name' => 'BSc Hons Systems and Software' ]
        ]);
    }
}
