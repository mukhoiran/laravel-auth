<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      for ($i=0; $i < 10 ; $i++) {
        DB::table('blogs')->insert([
          'title' => str_random(10),
          'description' => $faker->text,
        ]);
      }

      // DB::table('users')->insert([
      //   'name' => str_random(10),
      //   'email' => str_random(10).'@gmail.com',
      //   'password' => bcrypt('secret'),
      // ]);
    }
}
